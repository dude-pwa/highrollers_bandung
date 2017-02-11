@extends('layouts.admin')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Add New Size</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::open(['url' => 'admin/master_sizes']) !!}
				{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

				@include('admin.master_sizes.form', [$submitButton = 'Save'])
			{!! Form::close() !!}
		</div>
	</div>
@stop