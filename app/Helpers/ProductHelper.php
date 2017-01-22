<?php

use Illuminate\Support\Facades\DB;

class ProductHelper{

//    ==== GENERATE PRODUCT CODE FUNCTION
    public static function GenerateProductCode(){
        $products = DB::table('products')->max('code');

        if(!$products){
            $generate_code = 'HR00001';
            return $generate_code;
        }else{
            $max_code = $products;
            $splitCodeNumber = (int) substr($max_code, 2, 5);
            $splitCodeNumber++;

            $char = 'HR';
            $generate_code = $char . sprintf("%05s", $splitCodeNumber);

            return $generate_code;
        }
    }
}