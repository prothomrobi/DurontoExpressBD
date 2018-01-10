<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';
    protected $guarded = ['id', '*'];

    public function vendors(){
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
