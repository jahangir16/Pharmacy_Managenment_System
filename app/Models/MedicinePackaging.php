<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicinePackaging extends Model
{
    
    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }

    public function pharmaceuticalPackaging()
    {
        
        return $this->belongsTo(PharmaceuticalPackaging::class);
    }
    public function sellingUnit()
    {
        return $this->belongsTo(SellingUnit::class);
    }

    use HasFactory;
    protected $fillable=[
        'weight','medicine_id','selling_unit_id','pharmaceutical_packaging_id',
    ];
}
