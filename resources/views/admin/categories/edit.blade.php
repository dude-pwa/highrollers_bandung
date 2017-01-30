@extends('layouts.admin')

@section('content')
	<div class="panel panel-success">
		<h1 class="panel-heading">Edit {{$category->category_name}}</h1>
		<div class="panel-form panel-content">
			@include('errors.list')
			

			{!! Form::model($category, ['method' => 'patch', 'action' => ['AdminCategoryController@update', $category->id]]) !!}
					@include('admin.categories.form', ['submitButton'=>'Simpan Perubahan'])
				{!! Form::close() !!}
		</div>
	</div>
@stop