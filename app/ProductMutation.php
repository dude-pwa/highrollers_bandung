<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductMutation extends Model
{
    protected $fillable = ['product_id', 'masuk_qty','masuk_harga', 'keluar_qty', 'keluar_harga', 'tgl_mutasi'];
    
    protected $attributes = [
        'masuk_qty' => 0,
        'masuk_harga' => 0,
        'keluar_qty' => 0,
        'keluar_harga' => 0
    ];
}
