<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();

            // Reference ID (unique identifier for tracking)
            $table->string('reference_id')->unique();

            // Personal Details
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->text('residential_address');
            $table->string('national_id');
            $table->date('date_of_birth');
            $table->string('mobile_no');
            $table->string('email_address');
            $table->enum('sex', ['male', 'female']);
            $table->enum('marital_status', ['single', 'married', 'separated']);
            $table->integer('dependents_children')->default(0);
            $table->integer('dependents_others')->default(0);

            // Employment Details
            $table->enum('occupation', ['employed', 'self-employed']);
            $table->string('employer_business')->nullable();
            $table->text('employer_address')->nullable();
            $table->string('designation_department')->nullable();
            $table->integer('years_in_occupation')->nullable();
            $table->string('office_phone')->nullable();
            $table->decimal('monthly_salary_income', 12, 2);
            $table->decimal('other_income', 12, 2)->nullable();
            $table->enum('accommodation_status', ['owned', 'rented', 'parents']);

            // Loan Details
            $table->decimal('loan_amount', 12, 2);
            $table->integer('loan_period_months');
            $table->text('loan_purpose');

            // Banking Details
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('account_number');

            // Next of Kin 1
            $table->string('kin1_name');
            $table->string('kin1_relationship');
            $table->string('kin1_contact');
            $table->text('kin1_address');

            // Next of Kin 2
            $table->string('kin2_name');
            $table->string('kin2_relationship');
            $table->string('kin2_contact');
            $table->text('kin2_address');

            // Status and Tracking
            $table->enum('status', ['pending', 'approved', 'rejected', 'processing'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->string('pdf_path')->nullable();
            $table->ipAddress('ip_address')->nullable();

            $table->timestamps();

            // Indexes
            $table->index('status');
            $table->index('created_at');
            $table->index('national_id');
            $table->index('email_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
