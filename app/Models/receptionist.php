<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Laravel\Sanctum\HasApiTokens;

class receptionist extends Model
{
    use HasFactory;

    protected $guard = "receptionist";
    
    protected $table = "receptionist";

    protected $fillable = [
        'Rec_Email',
        'Rec_Username',
        'Rec_Lastname',
        'Rec_Firstname',
        'Rec_Pass',
        'Rec_Gender',
        'Rec_PhoneNum',
    ];

    protected $casts = [
        'Rec_Birthday' => 'datetime:Y-m-d',
    ];

}
