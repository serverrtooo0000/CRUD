@extends('master')

@section('content')
		<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('categories.admin.pas') }}"  enctype="multipart/form-data" >
                        @csrf

                        <label for="title">Вход</label><br>

						<label for="title">Имя:</label><br>
        				<input type="text" id="name" name="name" value=""><br>
        				<label for="description">Пароль:</label><br>
        				<input type="text" id="password" name="password" value=""><br>

        				<button type="submit">Войти</button>
						</form>

	<ul>
        @foreach ($users as $user)
           
            <li>{{ $user->name }}</li>
            <li><?='id = '?>{{ $user->password }}</li>


           

        @endforeach

        
    </ul>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

		

		