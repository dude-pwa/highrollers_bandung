<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInventory extends Model
{
    protected $fillable = ['product_id', 'saldo_qty'];
}
