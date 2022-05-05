<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'resort_register_id',
        'receptionist_id',
        'Estimation_Fare',
        'Standard_Payment',
        'VAT',
        'Total_Payment',
        'Payment_Method',
    ];

}
