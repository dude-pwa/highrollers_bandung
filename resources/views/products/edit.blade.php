@extends('layouts.app-old')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Edit {{$product->article_name}}</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::model($product, ['method' => 'patch', 'files' => true, 'action' => ['ProductController@update', $product->id]]) !!}
				<div class="input-group">
					{!! Form::label('code', 'Product Code: ', ['class'=>'input-group-addon bold']) !!}
					{!! Form::text('code', null, ['class' => 'form-control', 'readonly']) !!}
				</div> <br>
				@include('products.form', ['submitButton'=>'Simpan Perubahan'])
			{!! Form::close() !!}
		</div>
	</div>
@stop