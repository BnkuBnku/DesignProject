<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resort_register extends Model
{
    use HasFactory;

    protected $table = "resort_register";

    protected $fillable = [
        'Resort_name',
        'ResortLatitude_Coor',
        'ResortLongitude_Coor',
        'Resort_Address',
        'Services',
        'Cottages',
        'Essentials',
        'PerStay',
        'PerAdult',
        'PerChild',
    ];

}
