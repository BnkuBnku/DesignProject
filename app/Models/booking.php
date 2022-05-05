<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'Cus_Username',
        'HAdult_Count',
        'HChild_Count',
        'Referral_Num',
        'Status',
    ];

    protected $casts = [
        'Check_In' => 'datetime:Y-m-d',
        'Check_Out' => 'datetime:Y-m-d',
    ];

}
