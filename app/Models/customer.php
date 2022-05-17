<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = "customer";

    protected $fillable = [
        'Cus_Email',
        'Cus_Username',
        'Cus_Fname',
        'Cus_Lname',
        'Cus_Address',
        'Cus_Number',
    ];

}
