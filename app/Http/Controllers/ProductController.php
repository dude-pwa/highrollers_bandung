<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;

use Session;

use App\Http\Requests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $categories = Category::orderBy('category_name')->get();

        if($id != null){
            $products = Product::orderBy('created_at')->where('category_id', $id);
        }else {
            $products = Product::orderBy('created_at');
        }
        $products = $products->paginate();

        return view('products.index', compact('products', 'categories'));
    }

    public function search(Request $request){
        $query = $request->input('search');
        $categories = Category::orderBy('category_name')->get();

        if($query){
            $products = Product::orderBy('article_name')->where('article_name', 'like', '%'.$query.'%');
//            dd($products);
        }else {
            $products = Product::orderBy('article_name');
        }
        $products = $products->paginate();

        return view('products.index', compact('products', 'categories'));
    }

    public function indexOld()
    {
        $products = Product::orderBy('article_name');
        $products = $products->paginate();
        return view('products.index-old', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productCode = \ProductHelper::GenerateProductCode();
        $categories = Category::lists('category_name', 'id');
        $product_models = ProductModel::lists('model_name', 'id');
        return view('products.create', compact('categories', 'product_models', 'productCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductRequest $request)
    {
        if($request->hasFile('pict_front') || $request->hasFile('pict_back') || $request->hasFile('pict_closeup')){
            $path = public_path('images/products');

            if($request->file('pict_front')){
                $imageFront = $request->file('pict_front');
                $imageFrontRename = uniqid().".".$imageFront->getClientOriginalExtension();
                $imageFront->move($path, $imageFrontRename);
                $request->pict_front = $imageFrontRename;
//                dd("Nama file : $imageFrontRename");
            }
            if($request->file('pict_back')){
                $imageBack = $request->file('pict_back');
                $imageBackRename = uniqid().".".$imageBack->getClientOriginalExtension();
                $imageBack->move($path, $imageBackRename);
                $request->pict_back = $imageBackRename;
            }
            if($request->file('pict_closeup')){
                $imageCloseup = $request->file('pict_closeup');
                $imageCloseupRename = uniqid().".".$imageCloseup->getClientOriginalExtension();
                $imageCloseup->move($path, $imageCloseupRename);
                $request->pict_closeup= $imageCloseupRename;
            }
        }

//        Product::create($request->all());
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->product_model_id = $request->product_model_id;
        $product->code = $request->code;
        $product->article_name = $request->article_name;
        $product->color = $request->color;
        $product->size_s = $request->size_s ? $request->size_s : 0;
        $product->size_m = $request->size_m ? $request->size_m : 0;
        $product->size_l = $request->size_l ? $request->size_l : 0;
        $product->size_ll = $request->size_ll ? $request->size_ll : 0;
        $product->size_xl = $request->size_xl ? $request->size_xl : 0;
        $product->size_xxl = $request->size_xxl ? $request->size_xxl : 0;
        $product->size_xxxl = $request->size_xxxl ? $request->size_xxxl : 0;
        $product->price_normal = $request->price_normal;
        $product->price_over_size = $request->price_over_size;
        $product->qty_topi = $request->qty_topi ? $request->qty_topi : 0;
        $product->pict_front = $request->pict_front ? $request->pict_front : "";
        $product->pict_back = $request->pict_back ? $request->pict_back : "";
        $product->pict_closeup = $request->pict_closeup ? $request->pict_closeup : "";
        $product->save();

        Session::flash('message', 'Berhasil menambah data Product!');
        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::lists('category_name', 'id');
        $product_models = ProductModel::lists('model_name', 'id');
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product', 'categories', 'product_models'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $oldFrontImg = $product->pict_front;
        $oldBackImg = $product->pict_back;
        $oldCloseupImg = $product->pict_closeup;

        $path = public_path('images/products');


//        REPLACE OLD IMAGES
        if($request->hasFile('pict_front')) {
            if ($request->file('pict_front')) {
                $imageFront = $request->file('pict_front');
                $imageFrontRename = uniqid() . "." . $imageFront->getClientOriginalExtension();
                $imageFront->move($path, $imageFrontRename);
                $request->pict_front = $imageFrontRename;
                if (File::exists('images/products/' . $oldFrontImg)) {
                    File::delete('images/products/' . $oldFrontImg);
                }
            }
        }
        if($request->hasFile('pict_back')){
            if ($request->file('pict_back')) {
                $imageBack = $request->file('pict_back');
                $imageBackRename = uniqid() . "." . $imageBack->getClientOriginalExtension();
                $imageBack->move($path, $imageBackRename);
                $request->pict_back = $imageBackRename;
                if (File::exists('images/products/' . $oldBackImg)) {
                    File::delete('images/products/' . $oldBackImg);
                }
            }
        }
        if($request->hasFile('pict_closeup')) {
            if ($request->file('pict_closeup')) {
                $imageCloseup = $request->file('pict_closeup');
                $imageCloseupRename = uniqid() . "." . $imageCloseup->getClientOriginalExtension();
                $imageCloseup->move($path, $imageCloseupRename);
                $request->pict_closeup = $imageCloseupRename;
                if (File::exists('images/products/' . $oldCloseupImg)) {
                    File::delete('images/products/' . $oldCloseupImg);
                }
            }
        }

        $product->category_id = $request->category_id;
        $product->product_model_id = $request->product_model_id;
        $product->code = $request->code;
        $product->article_name = $request->article_name;
        $product->color = $request->color;
        $product->size_s = $request->size_s ? $request->size_s : 0;
        $product->size_m = $request->size_m ? $request->size_m : 0;
        $product->size_l = $request->size_l ? $request->size_l : 0;
        $product->size_ll = $request->size_ll ? $request->size_ll : 0;
        $product->size_xl = $request->size_xl ? $request->size_xl : 0;
        $product->size_xxl = $request->size_xxl ? $request->size_xxl : 0;
        $product->size_xxxl = $request->size_xxxl ? $request->size_xxxl : 0;
        $product->price_normal = $request->price_normal;
        $product->price_over_size = $request->price_over_size;
        $product->qty_topi = $request->qty_topi ? $request->qty_topi : 0;
        if($request->hasFile('pict_front')) {
            $product->pict_front = $request->pict_front ? $request->pict_front : "";
        }
        if($request->hasFile('pict_back')) {
            $product->pict_back = $request->pict_back ? $request->pict_back : "";
        }
        if($request->hasFile('pict_closeup')) {
            $product->pict_closeup = $request->pict_closeup ? $request->pict_closeup : "";
        }
        $product->save();

        Session::flash('message', 'Data Negara berhasil di rubah!');
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Session::flash('message', 'Data Negara berhasil di hapus!');
        return redirect('products');
    }
}
