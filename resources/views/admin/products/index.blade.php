@extends('layouts.admin')

@section('content')
	<br>
	<a href="{{ url('admin/products/create') }}" class="btn btn-primary">Add New Product</a>
	<br><br>
	<div class="panel panel-success">
		<h1 class="panel-heading">Product Lists</h1>
		<table class="table table-striped small">
			<tr>
				<th class="col-md-1">No.</th>
				<th class="col-md-4">Details</th>
				{{--<th class="col-md-2">Category</th>--}}
				{{--<th class="col-md-2">Article Name</th>--}}
				<th class="col-md-2 center">Qty.</th>
				<th class="col-md-1">Front Image</th>
				<th class="col-md-1">Back Image</th>
				<th class="col-md-1">Closeup Image</th>
				<th colspan="2" class="center">Action</th>
			</tr>
			<?php $i = 0; ?>
				@foreach($products as $product)
				<tr>
					<td>{{($products->currentpage()-1)*$products->perpage()+1 + $i}}</td>
					<td>
						<table>
							<tr>
								<td>Code </td>
								<td>: &ensp;</td>
								<td>{{ strtoupper($product->code) }}</td>
							</tr>
							<tr>
								<td>Category &nbsp;</td>
								<td>: &ensp;</td>
								<td>{{ strtoupper($product->category()->first()->category_name) }}</td>
							</tr>
							<tr>
								<td>Name </td>
								<td>: &ensp;</td>
								<td>{{ strtoupper($product->product_model()->first()->model_name.' '.$product->article_name) }}</td>
							</tr>
						</table>

					</td>
					{{--<td>--}}
						{{--<a href="{{ route('admin.products.show', $product->id) }}">--}}
						{{--{{ strtoupper($product->product_model()->first()->model_name.' '.$product->article_name) }}--}}
						{{--</a>--}}
					{{--</td>--}}
					<td>
						@if($product->is_accesories != true)
						<ul>
							<li>Size S: {{ $product->size_s }}</li>
							<li>Size M: {{ $product->size_m }}</li>
							<li>Size L: {{ $product->size_l }}</li>
							<li>Size LL: {{ $product->size_ll }}</li>
							<li>Size XL: {{ $product->size_xl }}</li>
							<li>Size XXL: {{ $product->size_xxl }}</li>
							<li>Size XXXL: {{ $product->size_xxxl }}</li>
						</ul>
						@else
						<ul>
							<li>Qty = {{ $product->qty_topi }}</li>
						</ul>
						@endif
					</td>
					<td><img src="{{ asset('images/products/'.$product->pict_front) }}" height="100" width="70" alt=""></td>
					<td><img src="{{ asset('images/products/'.$product->pict_back) }}" height="100" width="70" alt=""></td>
					<td><img src="{{ asset('images/products/'.$product->pict_closeup) }}" height="100" width="70" alt=""></td>

					{{--@if (!Auth::guest())--}}
					<td class="col-md-1" align="right">
						<a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-xs btn-info">Edit</a>
					</td>
					<td class="col-md-1 delete" align="left">
						{!! Form::open(['method'=>'delete', 'route'=>['admin.products.destroy', $product->id]]) !!}
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

