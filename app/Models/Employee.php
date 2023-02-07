<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'cnic',
        'gender',
        'phone',
        'license',
        'date_of_birth',
        'joined_date',
        'leaving_date',

    ];

}
