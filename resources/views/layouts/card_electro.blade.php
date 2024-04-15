


<!-- product -->
<div class="col-md-4 col-xs-6">
	<div class="product">
		<div class="product-img">
			<img src="./img/product_electro_shp.jpg" alt="">
									</div>
<div class="product-body">
	<p class="product-category">Category</p>
	<h3 class="product-name"><a href="#">{{$product->name}}</a></h3>
	<h4 class="product-price">{{$product->price}} руб<del class="product-old-price">$990.00</del></h4>

</div>


	<form action="{{route('basket-add',['id' => $product->id])}}"method="POST">
	<div class="add-to-cart">
	<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
	
		@csrf
		</form>


	

	
								</div>
							</div>
								</div>
							</div>
							<!-- /product -->



	
	