<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'product_model_id', 'code', 'article_name', 'created_by', 'modified_by'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function product_model(){
        return $this->belongsTo('App\ProductModel');
    }
}
