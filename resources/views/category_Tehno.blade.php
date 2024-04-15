@extends('layouts.master')

@section('content')

<!-- Cart -->
								
<div class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
	<i class="fa fa-shopping-cart"></i>
	<span>это ывол</span>
<div class="qty">3</div>
						</a>
<div class="cart-dropdown">
	<div class="cart-list">
		<div class="product-widget">
			<div class="product-img">
				<img src="./img/product_electro_shp.jpg" alt="">
												</div>
<div class="product-body">
	<h3 class="product-name"><a href="#">product name goes here</a></h3>
		<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
	<button class="delete"><i class="fa fa-close"></i></button>
											</div>


	
@endsection
											