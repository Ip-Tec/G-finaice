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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('home_address');
            $table->string('nationality');
            $table->string('email');
            $table->string('occupation');
            $table->decimal('monthly_income', 10, 2);
            $table->string('home_tel')->nullable();
            $table->string('mobile');
            $table->decimal('total_loan_amount', 10, 2);
            $table->integer('loan_duration');
            $table->text('loan_purpose');
            $table->boolean('applied_before')->default(false);
            $table->string('id_card')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
