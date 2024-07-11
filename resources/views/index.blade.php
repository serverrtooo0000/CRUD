@extends('master')

@section('content')

@foreach ($categories as $category)
	
	       
<!-- product -->
<div class="col-md-4 col-xs-6">
    <div class="product">
        <div class="product-img">
            <img src="{{ Storage::url($category->image_path) }}" alt="Category Image">

                                    </div>

<div class="product-body">
    <p class="product-category">{{ $category->title }}</p>
    <h3 class="product-name"><a href="#"></a></h3>
    <h4 class="product-price"><del class="product-old-price">Цену уточняйте </del></h4>

        </div>


    <form action=""method="POST">
    <div class="add-to-cart">
    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Заказать</button>
                                    </div>
    @csrf

        </form>


<ul>
           
            <li>{{ $category->description }}</li>
            

            
             <form action="{{ route('categories.destroy', [$category->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" id="delete-task-{{ $category->id }}" class="btn btn-danger">
                      Delete
                    </button>
                </form>

<button type="submit" class="btn btn-danger"><a href="{{ route('categories.update', [$category->id]) }} ">Update</a></button>


 </ul>
        </div>
            </div>
                </div>
                    </div>

                    

        @endforeach

        
   


@endsection

		

		