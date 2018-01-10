<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
     protected $table = 'purchases';
    protected $guarded = ['id', '*'];

    public function vendors(){
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
