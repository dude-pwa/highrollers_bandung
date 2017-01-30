@extends('layouts.admin')

@section('content')
	<br>
	<a href="{{ url('admin/product_models/create') }}" class="btn btn-primary">Add Product Model</a>
	<br><br>
	<div class="panel panel-success">
		<h1 class="panel-heading">Product Model Lists</h1>
		<table class="table table-striped small">
			<tr>
				<th class="col-md-1">No.</th>
				<th class="col-md-2">Model Name</th>
				<th colspan="2" class="center">Action</th>
			</tr>
			<?php $i = 0; ?>
				@foreach($product_models as $product_model)
					<tr>
						<td>{{($product_models->currentpage()-1)*$product_models->perpage()+1 + $i}}</td>
						<td>{{ strtoupper($product_model->model_name) }}</td>

						{{--@if (!Auth::guest())--}}
						<td class="col-md-1" align="right">
							<a href="{{ url('admin/product_models/'.$product_model->id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
						</td>
						<td class="col-md-1 delete" align="left">
							{!! Form::open(['method'=>'delete', 'route'=>['admin.product_models.destroy', $product_model->id]]) !!}
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
			{{$product_models->links()}}
		</div>
	</div>
	<br>

@endsection

