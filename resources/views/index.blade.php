@extends('layouts.master')

@section('content')
<div class="row">

		@foreach($products as $product)
		@include('layouts.card_electro',compact('product'))

		@endforeach

		
	</div>

@endsection

		

		

						



		
		

		

						

						



