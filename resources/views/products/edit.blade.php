@extends('layouts.app')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Edit {{$product->article_name}}</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::model($product, ['method' => 'patch', 'action' => ['ProductController@update', $product->id]]) !!}
					@include('products.form', ['submitButton'=>'Simpan Perubahan'])
				{!! Form::close() !!}
		</div>
	</div>
@stop