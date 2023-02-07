<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinesGeneric extends Model
{
    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
    public function generic()
    {
        return $this->belongsTo(Generic::class);
    }

    use HasFactory;
    protected $fillable=[
        'name','medicine_id','generic_id',
    ];
}
