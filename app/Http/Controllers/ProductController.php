<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductModel;
use Illuminate\Http\Request;
use Session;

use App\Http\Requests;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('article_name');
        $products = $products->paginate();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('category_name', 'id');
        $product_models = ProductModel::lists('model_name', 'id');
        return view('products.create', compact('categories', 'product_models'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductRequest $request)
    {
        Product::create($request->all());
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
        $product->update($request->all());

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
