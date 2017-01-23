@extends('layouts.app-old')

@section('content')
	<br>
	<a href="{{ url('/categories/create') }}" class="btn btn-primary">Add Category</a>
	<br><br>
	<a href="/" class="btn btn-warning">Home</a>
	<div class="panel panel-success">
		<h1 class="panel-heading">Category Lists</h1>
		<table class="table table-striped small">
			<tr>
				<th class="col-md-1">No.</th>
				<th class="col-md-2">Name</th>
				<th colspan="2" class="center">Action</th>
			</tr>
			<?php $i = 0; ?>
				@foreach($categories as $category)
					<tr>
						<td>{{($categories->currentpage()-1)*$categories->perpage()+1 + $i}}</td>
						<td>{{ strtoupper($category->category_name) }}</td>

						{{--@if (!Auth::guest())--}}
						<td class="col-md-1" align="right">
							<a href="/categories/{{$category->id}}/edit" class="btn btn-xs btn-info">Edit</a>
						</td>
						<td class="col-md-1 delete" align="left">
							{!! Form::open(['method'=>'delete', 'route'=>['categories.destroy', $category->id]]) !!}
							{!! Form::submit('Delete', ['class'=>'btn btn-xs btn-danger']) !!}
							{!!Form::close()!!}
						</td>
						{{--@endif--}}
					</tr>
				<?php $i += 1 ?>
				@endforeach
		</table>

		<br>
		<div class="center">
			{{$categories->links()}}
		</div>
	</div>
	<br>

@endsection

