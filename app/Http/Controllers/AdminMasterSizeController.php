<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterSize;
Use Session;

use App\Http\Requests;

class AdminMasterSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master_sizes = MasterSize::orderBy('name');
        $master_sizes = $master_sizes->paginate();
        return view('admin.master_sizes.index', compact('master_sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master_sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\MasterSizeRequest $request)
    {
        MasterSize::create($request->all());
        Session::flash('message', 'Berhasil!');
        return redirect('admin/master_sizes');
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
        $master_size = MasterSize::findOrFail($id);
        return view('admin.master_sizes.edit', compact('master_size'));
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
        $master_size = MasterSize::findOrFail($id);
        $master_size->update($request->all());

        Session::flash('message', 'Berhasil!');
        return redirect('admin/master_sizes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $master_size = MasterSize::findOrFail($id);
        $master_size->delete();

        Session::flash('message', 'Berhasil!');
        return redirect('admin/master_sizes');
    }
}
