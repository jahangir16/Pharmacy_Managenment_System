<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaceuticalPackaging extends Model
{
    public function medicinePackagings()
    {
        return $this->hasMany(MedicinePackaging::class);
    }
    public function purchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class);
    }

    use HasFactory;
    protected $fillable=[
        'name',
    ];

}
