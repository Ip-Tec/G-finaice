<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'gender',
        'marital_status',
        'home_address',
        'nationality',
        'email',
        'occupation',
        'monthly_income',
        'home_tel',
        'mobile',
        'total_loan_amount',
        'loan_duration',
        'loan_purpose',
        'applied_before',
        'id_card',
    ];
}
