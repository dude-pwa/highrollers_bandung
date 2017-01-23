@extends('layouts.app-old')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Add New Category</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::open(['url' => 'categories']) !!}
				{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

				@include('categories.form', [$submitButton = 'Simpan'])
			{!! Form::close() !!}
		</div>
	</div>
@stop