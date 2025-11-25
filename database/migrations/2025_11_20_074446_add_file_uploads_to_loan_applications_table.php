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
        Schema::table('loan_applications', function (Blueprint $table) {
            $table->string('payslip_path', 500)->nullable()->after('pdf_path');
            $table->string('id_document_path', 500)->nullable()->after('payslip_path');
            $table->string('bank_statement_path', 500)->nullable()->after('id_document_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            $table->dropColumn(['payslip_path', 'id_document_path', 'bank_statement_path']);
        });
    }
};
