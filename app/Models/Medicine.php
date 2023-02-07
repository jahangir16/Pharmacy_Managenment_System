<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //many to one Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function manafacture()
    {
        return $this->belongsTo(Manafacture::class);
    }
    public function chemicalFormula()
    {
        return $this->belongsTo(ChemicalFormula::class);
    }
    public function medicinegeneric()
    {
        return $this->hasMany(MedicinesGeneric::class);
    }
    public function medicinePackagings()
    {
        return $this->hasMany(MedicinePackaging::class);
    }
    
    //many to many RelationShips
    public function usages()
    {
        return $this->belongsToMany(Usage::class,'medicine_usages')->withTimestamps();
    }
    use HasFactory;
    protected $fillable = [

        'name', 'category_id', 'manafacture_id','chemical_formula_id',

    ];
}
