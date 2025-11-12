<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // Personal Details
        'first_name',
        'middle_name',
        'surname',
        'residential_address',
        'national_id',
        'date_of_birth',
        'mobile_no',
        'email_address',
        'sex',
        'marital_status',
        'dependents_children',
        'dependents_others',

        // Employment Details
        'occupation',
        'employer_business',
        'employer_address',
        'designation_department',
        'years_in_occupation',
        'office_phone',
        'monthly_salary_income',
        'other_income',
        'accommodation_status',

        // Loan Details
        'loan_amount',
        'loan_period_months',
        'loan_purpose',

        // Banking Details
        'bank_name',
        'bank_branch',
        'account_number',

        // Next of Kin 1
        'kin1_name',
        'kin1_relationship',
        'kin1_contact',
        'kin1_address',

        // Next of Kin 2
        'kin2_name',
        'kin2_relationship',
        'kin2_contact',
        'kin2_address',

        // Status
        'status',
        'admin_notes',
        'pdf_path',
        'ip_address',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_of_birth' => 'date',
        'monthly_salary_income' => 'decimal:2',
        'other_income' => 'decimal:2',
        'loan_amount' => 'decimal:2',
        'dependents_children' => 'integer',
        'dependents_others' => 'integer',
        'years_in_occupation' => 'integer',
        'loan_period_months' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the applicant's full name.
     */
    public function getFullNameAttribute(): string
    {
        return trim("{$this->first_name} {$this->middle_name} {$this->surname}");
    }

    /**
     * Get the total number of dependents.
     */
    public function getTotalDependentsAttribute(): int
    {
        return $this->dependents_children + $this->dependents_others;
    }

    /**
     * Get the total monthly income.
     */
    public function getTotalMonthlyIncomeAttribute(): float
    {
        return $this->monthly_salary_income + ($this->other_income ?? 0);
    }

    /**
     * Scope a query to only include pending applications.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope a query to only include approved applications.
     */
    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    /**
     * Scope a query to only include rejected applications.
     */
    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }
}
