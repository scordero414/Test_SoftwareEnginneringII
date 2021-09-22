<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'first_name',
        'last_name',
        'email',
        'address',
        'speciality'
    ];

}
