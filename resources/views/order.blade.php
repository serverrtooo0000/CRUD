@extends('layouts.master')

@section('content')

<div class="starter-template">
	<h1>Потверьдите заказ:</h1>
	<div class="container">
		<div class="row justify-content-center">
			<p>Общая стоимость заказа:<b>{{$order->getFullPrice()}}руб.</b></p>
			<form action="{{route('basket-confirn')}}"method="POST">
				<div>
					<p>Укажите свои имя и номер телефона,чтобы наш менеджер мог с вами связаться:</p>

					<div class="container">
						<div class="form-group">
							<label for="name" class="control-label col-lg-offset-3 col-lg-2 ">Имя:</label>
							<div class="col-lg-4">
								<input type="text" name="name" value="" class="form-control">
							</div>
						</div>
						<br>
						<br>
						<div class="form-group">
							<label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефона:</label>
							<div class="col-lg-4">
								<input type="text" name="phone" id="phone" class="form-control">
							</div>
						</div>
					</div>
					<br>
					<input type="submit" name="_token" value="2dvsvfn3g">
					<br>
					@csrf
					<input type="submit" class="btn btn-success" value="Потверьдить заказ">
				</div>
			</form>
		</div>
	</div>
</div>


@endsection
											