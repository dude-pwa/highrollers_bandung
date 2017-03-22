<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductModel;
use App\ProductInventory;
use App\ProductMutation;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Session;
use DB;
use App\Http\Requests;

class ProductMutationController extends Controller
{
    public function show($productCode = null){
        if($productCode != null){
            $product = Product::where('code', $productCode);
        }
        return view('admin.products.show', compact('product'));
    }
    
    public function store(Requests\ProductMutationRequest $request)
    {
//        if($product != null){
//            $product = Product::where('code', $product)->first();
//        }
//        dd($request->product_id);
//        DB::transaction(function(){
            $product = Product::where('id', $request->product_id)->first();
//        dd($product);
            $product->size_s = $request->size_s ? 
                ($request->size_s + $product->size_s) : ($product->size_s + 0);
            $product->size_m = $request->size_m ? 
                ($request->size_m + $product->size_m) : ($product->size_m + 0);
            $product->size_l = $request->size_l ? 
                ($request->size_l + $product->size_l) : ($product->size_l + 0);
            $product->size_ll = $request->size_ll ? 
                ($request->size_ll + $product->size_ll) : ($product->size_ll + 0);
            $product->size_xl = $request->size_xl ? 
                ($request->size_xl + $product->size_xl) : ($product->size_xl + 0);
            $product->size_xxl = $request->size_xxl ? 
                ($request->size_xxl + $product->size_xxl) : ($product->size_xxl + 0);
            $product->size_xxxl = $request->size_xxxl ? 
                ($request->size_xxxl + $product->size_xxxl) : ($product->size_xxxl + 0);
            $product->qty_topi = $request->qty_topi ? ($product->qty_topi + $request->qty_topi) : ($product->qty_topi + 0);
            
            $product->save();

            if($product->save()){
                $p_inventory = ProductInventory::where('product_id', $request->product_id)->first();
                $p_mutation = new ProductMutation();
                
                if($product->is_accesories == 1){
//                    update inventory
                    $p_inventory->saldo_qty += $request->qty_topi;
//                    dd($p_inventory->saldo_qty);
                    $p_inventory->save();
                    
                    $p_mutation->product_id = $p_inventory->product_id;
                    $p_mutation->masuk_qty = $request->qty_topi;
                    $p_mutation->tgl_mutasi = $request->tgl_mutasi;
                    $p_mutation->save();
                }else{
//                    update inventory
                    $p_inventory->saldo_qty += $request->size_s + $request->size_m + $request->size_l +
                        $request->size_ll + $request->size_xl + $request->size_xxl + $request->size_xxxl;
                    $p_inventory->save();
                    
                    $p_mutation->product_id = $p_inventory->product_id;
                    $p_mutation->masuk_qty =  $request->size_s +
                        $request->size_m + $request->size_l +
                        $request->size_ll + $request->size_xl + $request->size_xxl + $request->size_xxxl;
                    $p_mutation->tgl_mutasi = $request->tgl_mutasi;
                    $p_mutation->save();
                }
            }
//        });

        Session::flash('message', 'Berhasil!');
        return redirect('admin/product_mutation/' . $product->code);
    }
}
