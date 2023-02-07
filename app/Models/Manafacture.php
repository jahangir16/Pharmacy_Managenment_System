<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manafacture extends Model
{
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
    use HasFactory;
    protected $fillable=[
        'name','email','phone','address',
    ];

}
