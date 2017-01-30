@extends('layouts.admin')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Add New Product</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::open(['url' => 'admin/products', 'files' => true]) !!}
				{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
				<div class="input-group">
					{!! Form::label('code', 'Product Code: ', ['class'=>'input-group-addon bold']) !!}
					{!! Form::text('code', $productCode, ['class' => 'form-control', 'readonly']) !!}
				</div> <br>
				@include('products.form', [$submitButton = 'Simpan'])
			{!! Form::close() !!}
		</div>
	</div>
@stop