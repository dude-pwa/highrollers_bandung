@extends('layouts.admin')

@section('content')    
    <div class="panel panel-success">
        <h1 class="panel-heading">Tambah Stok</h1>
        <div class="panel-form panel-content">
            @include('errors.list')
            {!! Form::open([
               'method'=>'post',
                'action'=>'ProductMutationController@store']) !!}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <div id="select-product">
               <div class="input-group">
                    {!! Form::label('product_id', 'Product Code: ', ['class'=>'input-group-addon bold']) !!}
                    {{ Form::select('product_id', $products, 
                       $getProduct!=null ? $getProduct->id : null, 
                       ['class' => 'form-control form-select', 
                        'placeholder' => $product ? $product : '-- Pilih Kode Produk --',
                        'id' => 'selected-product']) }}
                </div> 
            </div> <br>
            <div class="input-group">
                {!! Form::label('tgl_mutasi', 'Tanggal: ', ['class'=>'input-group-addon bold']) !!}
                {!! Form::date('tgl_mutasi', \Carbon\Carbon::now(),         ['class' => '']) !!}
            </div> <br>
            @if($product != null)
               @if($tipe != 1)
                <div id="input-size">
                    <div class="input-group">
                        {!! Form::label('size_s', 'Size S Qty.: ', ['class'=>'input-group-addon bold']) !!}
                        {!! Form::text('size_s', null, ['class' => 'form-control']) !!}
                    </div> <br>
                    <div class="input-group">
                        {!! Form::label('size_m', 'Size M Qty.: ', ['class'=>'input-group-addon bold']) !!}
                        {!! Form::text('size_m', null, ['class' => 'form-control']) !!}
                    </div> <br>
                    <div class="input-group">
                        {!! Form::label('size_l', 'Size L Qty.: ', ['class'=>'input-group-addon bold']) !!}
                        {!! Form::text('size_l', null, ['class' => 'form-control']) !!}
                    </div> <br>
                    <div class="input-group">
                        {!! Form::label('size_ll', 'Size LL Qty.: ', ['class'=>'input-group-addon bold']) !!}
                        {!! Form::text('size_ll', null, ['class' => 'form-control']) !!}
                    </div> <br>
                    <div class="input-group">
                        {!! Form::label('size_xl', 'Size XL Qty.: ', ['class'=>'input-group-addon bold']) !!}
                        {!! Form::text('size_xl', null, ['class' => 'form-control']) !!}
                    </div> <br>
                    <div class="input-group">
                        {!! Form::label('size_xxl', 'Size XXL Qty.: ', ['class'=>'input-group-addon bold']) !!}
                        {!! Form::text('size_xxl', null, ['class' => 'form-control']) !!}
                    </div> <br>
                    <div class="input-group">
                        {!! Form::label('size_xxxl', 'Size XXXL Qty.: ', ['class'=>'input-group-addon bold']) !!}
                        {!! Form::text('size_xxxl', null, ['class' => 'form-control']) !!}
                    </div>
                </div> <br>
               @else
                <div class="input-group" id="input-topi">
                    {!! Form::label('qty_topi', 'Qty: ', ['class'=>'input-group-addon bold']) !!}
                    {!! Form::text('qty_topi', null, ['class' => 'form-control']) !!}
                </div> <br>
                @endif
            @endif
            
            <div class="input-group pull-right">
                <a href="/admin/products/" class="btn btn-default">Back</a> &nbsp;&nbsp;&nbsp;
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    <br><br>
    
    <script type="text/javascript">
        $("#select-product").change(function(){
            window.location.href = "/admin/products/add_stock" + '/' + $('#selected-product').find(":selected").text();
        });
    </script>
@stop