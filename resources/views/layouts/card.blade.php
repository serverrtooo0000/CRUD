

<!-- product -->
<div class="col-md-4 col-xs-6">
	<div class="product">
		<div class="product-img">
			<img src="./img/product_plansh_tooth.jpeg" alt="">
									</div>

<div class="product-body">
	<p class="product-category">Category</p>
	<h3 class="product-name"><a href="#">{{$cateTooth->name}}</a></h3>
	<h4 class="product-price">{{$cateTooth->price}} руб<del class="product-old-price">$990.00</del></h4>

		</div>


	<form action="{{route('basket-add',['id' => $cateTooth->id])}}"method="POST">
	<div class="add-to-cart">
	<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
	@csrf

		</form>

				




		

	
								</div>
							</div>


								</div>
							</div>
									@if(empty($cateTooth))
Корзина пуста. Перейти в каталог
@else
Ваш заказ ...
@endif 




						
							<!-- /product -->


	
	