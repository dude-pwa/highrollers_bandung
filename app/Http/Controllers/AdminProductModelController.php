<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;
use Session;

use App\Http\Requests;

class AdminProductModelController extends Controller
{
    public function index()
    {
        $product_models = ProductModel::orderBy('model_name');
        $product_models = $product_models->paginate();
        return view('admin.product_models.index', compact('product_models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductModelRequest $request)
    {
        ProductModel::create($request->all());
        Session::flash('message', 'Success');
        return redirect('admin/product_models');
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
        $product_model = ProductModel::findOrFail($id);
        return view('admin.product_models.edit', compact('product_model'));
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
        $product_model = ProductModel::findOrFail($id);
        $product_model->update($request->all());

        Session::flash('message', 'Success !');
        return redirect('admin/product_models');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_model = ProductModel::findOrFail($id);
        $product_model->delete();

        Session::flash('message', 'Success!');
        return redirect('admin/product_models');
    }
}
