#!/bin/bash

# Docker Health Check Script
# Checks if all services are running properly

set -e

# Colors
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

print_status() {
    local service=$1
    local status=$2
    local message=$3

    if [ "$status" = "ok" ]; then
        echo -e "[${GREEN}✓${NC}] ${service}: ${message}"
    elif [ "$status" = "warning" ]; then
        echo -e "[${YELLOW}⚠${NC}] ${service}: ${message}"
    else
        echo -e "[${RED}✗${NC}] ${service}: ${message}"
    fi
}

echo -e "${BLUE}╔════════════════════════════════════════════╗${NC}"
echo -e "${BLUE}║  PayHouse Finance - Docker Health Check  ║${NC}"
echo -e "${BLUE}╚════════════════════════════════════════════╝${NC}"
echo ""

# Check if docker-compose is running
if ! docker-compose ps | grep -q "Up"; then
    print_status "Docker Compose" "error" "No containers are running"
    exit 1
fi

# Check Application Container
echo -e "${BLUE}[1/5] Checking Application Container...${NC}"
if docker-compose ps app | grep -q "Up"; then
    # Check if nginx is responding
    if curl -sf http://localhost:8080/health > /dev/null 2>&1; then
        print_status "Application" "ok" "Running and responding"
    else
        print_status "Application" "warning" "Running but not responding on port 8080"
    fi
else
    print_status "Application" "error" "Container is not running"
fi

# Check MySQL Container
echo -e "${BLUE}[2/5] Checking MySQL Container...${NC}"
if docker-compose ps mysql | grep -q "Up"; then
    if docker-compose exec -T mysql mysqladmin ping -h localhost --silent > /dev/null 2>&1; then
        print_status "MySQL" "ok" "Running and accepting connections"
    else
        print_status "MySQL" "warning" "Running but not accepting connections"
    fi
else
    print_status "MySQL" "error" "Container is not running"
fi

# Check Redis Container
echo -e "${BLUE}[3/5] Checking Redis Container...${NC}"
if docker-compose ps redis | grep -q "Up"; then
    if docker-compose exec -T redis redis-cli ping > /dev/null 2>&1; then
        print_status "Redis" "ok" "Running and responding"
    else
        print_status "Redis" "warning" "Running but not responding"
    fi
else
    print_status "Redis" "error" "Container is not running"
fi

# Check Queue Worker
echo -e "${BLUE}[4/5] Checking Queue Worker...${NC}"
if docker-compose ps queue | grep -q "Up"; then
    print_status "Queue Worker" "ok" "Running"
else
    print_status "Queue Worker" "error" "Container is not running"
fi

# Check Scheduler
echo -e "${BLUE}[5/5] Checking Scheduler...${NC}"
if docker-compose ps scheduler | grep -q "Up"; then
    print_status "Scheduler" "ok" "Running"
else
    print_status "Scheduler" "error" "Container is not running"
fi

echo ""
echo -e "${BLUE}════════════════════════════════════════════${NC}"

# Check disk usage
echo -e "${BLUE}Disk Usage:${NC}"
docker system df

echo ""

# Check resource usage
echo -e "${BLUE}Container Resource Usage:${NC}"
docker stats --no-stream --format "table {{.Container}}\t{{.CPUPerc}}\t{{.MemUsage}}\t{{.NetIO}}" $(docker-compose ps -q)

echo ""
echo -e "${GREEN}Health check completed!${NC}"
