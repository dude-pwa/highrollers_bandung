@extends('layouts.app')

@section('content')
    <div id="fh5co-product">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-0 animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth product-carousel">
                        <div class="item">
                            <div class="active text-center">
                                <figure>
                                    <img src="{{ asset('images/products/'.$product->pict_front) }}" alt="user">
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="active text-center">
                                <figure>
                                    <img src="{{ asset('images/products/'.$product->pict_back) }}" alt="user">
                                </figure>
                            </div>
                        </div>
                        <div class="item">
                            <div class="active text-center">
                                <figure>
                                    <img src="{{ asset('images/products/'.$product->pict_closeup) }}" alt="user">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            {{--</div>--}}
            {{--<div class="row">--}}
                <div class="col-md-7 col-md-offset-0">
                    <div class="fh5co-tabs animate-box">
                        <!-- Tabs -->
                        <div class="fh5co-tab-content-wrap">
                            <div class="fh5co-tab-content tab-content active" data-tab-content="1">
                                <div class="col-md-10 col-md-offset-1">
                                    <h2>{{ strtoupper($product->product_model()->first()->model_name. ' ' .$product->article_name) }}</h2>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h2 class="uppercase">Available Stock</h2>
                                                {{--<span class="price">--}}
                                                @if($product->is_accesories == false)
                                                    <table class="table table-responsive" width="100%">
                                                        <tr>
                                                            <th>Size</th>
                                                            <th class="center">Stock</th>
                                                        </tr>
                                                        <tr>
                                                            <td>S</td>
                                                            <td class="center">
                                                                @if($product->size_s == 0)
                                                                <strike>Out Of Stock</strike>
                                                                @else
                                                                {{ $product->size_s }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>M</td>
                                                            <td class="center">
                                                                @if($product->size_m == 0)
                                                                <strike>Out Of Stock</strike>
                                                                @else
                                                                {{ $product->size_m }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>L</td>
                                                            <td class="center">
                                                                @if($product->size_l == 0)
                                                                <strike>Out Of Stock</strike>
                                                                @else
                                                                {{ $product->size_l }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>LL</td>
                                                            <td class="center">
                                                                @if($product->size_ll == 0)
                                                                <strike>Out Of Stock</strike>
                                                                @else
                                                                {{ $product->size_ll }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>XL</td>
                                                            <td class="center">
                                                                @if($product->size_xl == 0)
                                                                <strike>Out Of Stock</strike>
                                                                @else
                                                                {{ $product->size_xl }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>XXL</td>
                                                            <td class="center">
                                                                @if($product->size_xxl == 0)
                                                                <strike>Out Of Stock</strike>
                                                                @else
                                                                {{ $product->size_xxl }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>XXXL</td>
                                                            <td class="center">
                                                                @if($product->size_xxxl == 0)
                                                                <strike>Out Of Stock</strike>
                                                                @else
                                                                {{ $product->size_xxxl }}
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </table>
                                                @else
                                                    <table class="table table-responsive" width="20%">
                                                        <tr>
                                                            <td width="10%">Qty.</td>
                                                            <td class="center">{{ $product->qty_topi }}</td>
                                                        </tr>
                                                    </table>
                                                @endif
                                                {{--</span>--}}

                                                {{--<span class="price">--}}
                                                    {{--@if($product->size_s == 0)--}}
                                                        {{--S: Out Of Stock--}}
                                                    {{--@else--}}
                                                        {{--S: {{ $product->size_s }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                                {{--<span class="price">--}}
                                                    {{--@if($product->size_m == 0)--}}
                                                        {{--M: Out Of Stock--}}
                                                    {{--@else--}}
                                                        {{--M: {{ $product->size_m }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                                {{--<span class="price">--}}
                                                    {{--@if($product->size_l == 0)--}}
                                                        {{--L: Out Of Stock--}}
                                                    {{--@else--}}
                                                        {{--L: {{ $product->size_l }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                                {{--<span class="price">--}}
                                                    {{--@if($product->size_ll == 0)--}}
                                                        {{--LL: Out Of Stock--}}
                                                    {{--@else--}}
                                                        {{--LL: {{ $product->size_ll }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                                {{--<span class="price">--}}
                                                    {{--@if($product->size_xl == 0)--}}
                                                        {{--XL: Out Of Stock--}}
                                                    {{--@else--}}
                                                        {{--XL: {{ $product->size_xl }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                                {{--<span class="price">--}}
                                                    {{--@if($product->size_xxl == 0)--}}
                                                        {{--XXL: Out Of Stock--}}
                                                    {{--@else--}}
                                                        {{--XXL: {{ $product->size_xxl }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                                {{--<span class="price">--}}
                                                    {{--@if($product->size_xxxl == 0)--}}
                                                        {{--XXXL: Out Of Stock--}}
                                                    {{--@else--}}
                                                        {{--XXXL: {{ $product->size_xxxl }}--}}
                                                    {{--@endif--}}
                                                {{--</span>--}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h2 class="uppercase">Price</h2>
                                            <span class="price"><b>S - XL: Rp. {{ $product->price_normal. ',-' }}</b></span>
                                            <br>
                                            <span class="price"><b>XXL - XXXL: Rp. {{ $product->price_over_size. ',-' }}</b></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection