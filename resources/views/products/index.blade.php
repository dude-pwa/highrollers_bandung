@extends('layouts.app')

@section('content')
	<br>
	<a href="{{ url('/products/create') }}" class="btn btn-primary">Add New Product</a>
	<br><br>
	<a href="/" class="btn btn-warning">Home</a>
	<div class="panel panel-success">
		<h1 class="panel-heading">Product Lists</h1>
		<table class="table table-striped small">
			<tr>
				<th class="col-md-1">No.</th>
				<th class="col-md-2">Code</th>
				<th class="col-md-2">Category</th>
				<th class="col-md-2">Model</th>
				<th class="col-md-2">Article Name</th>
				<th colspan="2" class="center">Action</th>
			</tr>
			<?php $i = 0; ?>
				@foreach($products as $product)
					<tr>
						<td>{{($products->currentpage()-1)*$products->perpage()+1 + $i}}</td>
                        <td>{{ strtoupper($product->code) }}</td>
                        <td>{{ strtoupper($product->category()->first()->category_name) }}</td>
                        <td>{{ strtoupper($product->product_model()->first()->model_name) }}</td>
                        <td>{{ strtoupper($product->article_name) }}</td>

						{{--@if (!Auth::guest())--}}
						<td class="col-md-1" align="right">
							<a href="/products/{{$product->id}}/edit" class="btn btn-xs btn-info">Edit</a>
						</td>
						<td class="col-md-1 delete" align="left">
							{!! Form::open(['method'=>'delete', 'route'=>['products.destroy', $product->id]]) !!}
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
			{{$products->links()}}
		</div>
	</div>
	<br>

@endsection

