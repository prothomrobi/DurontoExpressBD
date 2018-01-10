<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['*', 'id'];

    public function vendors(){
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }
}
