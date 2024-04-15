@extends('layouts.master')

@section('content')


@foreach($order->products as $product)	
	
<form action="{{route('basket-remove',	$product)}}"method="POST">
	<div class="add-to-cart">
	<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>+</button>
									</div>
		@csrf
	
</form>
<form action="{{route('basket-add',	$product)}}"method="POST">
	<div class="add-to-cart">
	<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>-</button>
									</div>
		@csrf
</form>

<div class="qty"></div>
						</a>
<div class="cart-dropdown">
	<div class="cart-list">
		<div class="product-widget">
			<div class="product-img">
				<img src="./img/product_electro_shp.jpg" alt="">
												</div>
<div class="product-body">
	<h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
		<h4 class="product-price"><span class="qty">1x</span>{{$product->getPriceForCount()}}</h4>
		<h4 class="product-price"><span class="qty">1x</span>{{$order->getFullPrice()}}</h4>
												</div>
	<button class="delete"><i class="fa fa-close"></i></button>
											</div>	
@endforeach	
@endsection
											