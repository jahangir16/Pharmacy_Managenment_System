<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    
    use HasFactory;
    protected $fillable=[
        'medicine_packaging_id','vendor_id','order_quantity','order_date'
    ];
}
