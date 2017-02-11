@extends('layouts.admin')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Edit {{$master_size->name}}</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::model($master_size, ['method' => 'patch', 'action' => ['AdminMasterSizeController@update', $master_size->id]]) !!}
					@include('admin.master_sizes.form', ['submitButton'=>'Update'])
				{!! Form::close() !!}
		</div>
	</div>
@stop