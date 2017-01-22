<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'product_model_id', 'code', 'article_name', 'created_by', 'modified_by',
        'color', 'size_s', 'size_m', 'size_l', 'size_ll', 'size_xl', 'size_xxl', 'size_xxxl',
        'price_normal', 'price_over_size', 'qty_topi'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function product_model(){
        return $this->belongsTo('App\ProductModel');
    }
}
