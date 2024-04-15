@extends('layouts.master')

@section('content')


<div class="row">

		@foreach($category as $cateTooth)
		@include('layouts.card',compact('cateTooth'))

		@endforeach

		
		

	</div>



@endsection

 		
   

			
						
								
												
