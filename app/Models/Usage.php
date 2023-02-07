<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    //many to many RelationShips
    public function medicines()
    {
        return $this->belongsToMany(Medicine::class,'medicine_usage')->withTimestamps();
    }
    use HasFactory;
    protected $fillable=[
        'name',
    ];
}
