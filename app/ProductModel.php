<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $fillable = ['model_name', 'created_by', 'modified_by'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}
