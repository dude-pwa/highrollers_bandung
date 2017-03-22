@extends('layouts.admin')

@section('content')
    <div class="panel panel-success" style="margin-top: 100px">
        <h1 class="panel-heading">
            {{ strtoupper($product->product_model()->first()->model_name. ' ' .$product->article_name. ' (' .$product->code.')') }}
        </h1>
        <div class="panel-form panel-content">
            <table class="table table-bordered">
                <tr>
                    <th class="center col-md-2" rowspan="">Images</th>
                    <th class="center col-md-1" colspan="7">Available Size</th>
                    <th class="center" colspan="2">Price</th>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    @if($product->is_accesories != true)
                        <th class="center" width="20">S</th>
                        <th class="center" width="20">M</th>
                        <th class="center" width="20">L</th>
                        <th class="center" width="20">LL</th>
                        <th class="center" width="20">XL</th>
                        <th class="center" width="20">XXL</th>
                        <th class="center" width="20">XXXL</th>
                        <th class="col-md-1 center">Normal</th>
                        <th class="col-md-1 center">Over Size</th>
                    @else
                       <div style="border-right: 0;"></div>
                        <th class="center" width="140" colspan="7">Quantity</th>
                        <th class="col-md-1 center" colspan="2">&nbsp;</th>
                    @endif
                    
                </tr>
                <tr>
                    <td>
                        <center>
                        <img src="{{ asset('images/products/'.$product->pict_front) }}" alt="user"> &nbsp;
                        <img src="{{ asset('images/products/'.$product->pict_back) }}" alt="user"> &nbsp;
                        <img src="{{ asset('images/products/'.$product->pict_closeup) }}" alt="user"> &nbsp;
                        </center>
                    </td>
                    @if($product->is_accesories != true)
                        <td class="center">{{ $product->size_s }}</td>
                        <td class="center">{{ $product->size_m }}</td>
                        <td class="center">{{ $product->size_l }}</td>
                        <td class="center">{{ $product->size_ll }}</td>
                        <td class="center">{{ $product->size_xl }}</td>
                        <td class="center">{{ $product->size_xxl }}</td>
                        <td class="center">{{ $product->size_xxxl }}</td>

                        <td class="right">Rp. {{ $product->price_normal. ', -' }}</td>
                        <td class="right">Rp. {{ $product->price_over_size. ', -' }}</td>
                    @else
                        <th class="center" width="20" colspan="7">{{ $product->qty_topi }}</th>
                        <th class="center" width="20" colspan="2">Rp. {{ $product->price_normal. ', -' }}</th>
                    @endif
                </tr>
            </table>
        </div>
    </div>
@endsection