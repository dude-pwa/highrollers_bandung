@extends('layouts.app')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Add New Product</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::open(['url' => 'products']) !!}
				{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

				@include('products.form', [$submitButton = 'Simpan'])
			{!! Form::close() !!}
		</div>
	</div>
@stop