<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Laravel\Sanctum\HasApiTokens;

class admin extends Model
{
    use HasFactory;

    protected $guard = "admin";

    protected $table = "admin";

    protected $fillable = [ 
        'Admin_Email',
        'Admin_Username',
        'Admin_Lastname',
        'Admin_Firstname',
        'Admin_Pass',
        'Admin_Gender',
        'Admin_PhoneNum',
    ];

    protected $casts = [
        'Admin_Birthday' => 'datetime:Y-m-d',
    ];
    
}