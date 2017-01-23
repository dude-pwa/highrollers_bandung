@extends('layouts.app')

@section('content')
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span class="text-danger">HighRollers</span>
					<hr>
					{{--<h2>Products</h2>--}}
					{{--<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>--}}
				</div>
			</div>
			<div class="row">
				{{--<div class="sidebar">--}}
				<div class="col-md-3 col-md-push-1 animate-box sidebar">
					<h3 class="pull-left text-info" style="margin-left: -120px">Category</h3><br><br>
					<div class="fh5co-contact-info aside">
						<ul>
							@foreach($categories as $category)
								<li class="url"><a href="#">{{ $category->category_name }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
				{{--</div>--}}

				@foreach($products as $product)
				<div class="col-md-3 text-center animate-box">
					<div class="product">
						<div class="product-grid content" style="background-image:url({{ asset('images/products/'.$product->pict_front) }});">
							<div class="inner">
								<p>
									{{--<a href="#" class="icon"><i class="icon-shopping-cart"></i></a>--}}
									<a href="{{ url('products/'.$product->id) }}" class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="{{ url('products/'.$product->id) }}">{{ strtoupper($product->product_model()->first()->model_name. ' ' .$product->article_name) }}</a></h3>
							<span class="price">{{ $product->price_normal }}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection

