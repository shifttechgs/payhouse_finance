<?php
// Quick PHP version check for Apache
echo "<h1>Apache PHP Version Check</h1>";
echo "<h2>PHP Version: " . phpversion() . "</h2>";

echo "<h2>SQL Server Extensions:</h2>";
if (extension_loaded('pdo_sqlsrv')) {
    echo "<p style='color: green; font-size: 20px; font-weight: bold;'>✓ pdo_sqlsrv is LOADED</p>";
} else {
    echo "<p style='color: red; font-size: 20px; font-weight: bold;'>✗ pdo_sqlsrv is NOT loaded</p>";
}

if (extension_loaded('sqlsrv')) {
    echo "<p style='color: green; font-size: 20px; font-weight: bold;'>✓ sqlsrv is LOADED</p>";
} else {
    echo "<p style='color: red; font-size: 20px; font-weight: bold;'>✗ sqlsrv is NOT loaded</p>";
}

echo "<h2>All PDO Drivers:</h2>";
echo "<pre>";
print_r(PDO::getAvailableDrivers());
echo "</pre>";

echo "<hr>";
echo "<p>If you see PHP 8.3.14 and both SQL Server extensions are loaded (green), you're good to go!</p>";
echo "<p>If you see PHP 8.4.1 or extensions are NOT loaded (red), you need to switch WAMP to PHP 8.3.14</p>";
