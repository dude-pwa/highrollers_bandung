@extends('layouts.app')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Edit {{$product_model->model_name}}</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::model($product_model, ['method' => 'patch', 'action' => ['ProductModelController@update', $product_model->id]]) !!}
					@include('product_models.form', ['submitButton'=>'Update'])
				{!! Form::close() !!}
		</div>
	</div>
@stop