@extends('layouts.app')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Add New Product Model</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::open(['url' => 'product_models']) !!}
				{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

				@include('product_models.form', [$submitButton = 'Save'])
			{!! Form::close() !!}
		</div>
	</div>
@stop