<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\BasketController;

use App\Http\Controllers\Auth\LoginController;




Auth::routes([
		/*'login' => true,
        'logout' => true,
        'register' => true,*/
        'reset' => false,
		'confirm' => false,
		'verify' =>	false,	
]);

Route::get('/logout',[LoginController::class,'logout'])->name('get-logout');

/*Route::group(['middleware'=>'auth'],fuction() {

	Route::get('/home',[OrderController::class,'index'])->name('home');

});*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/place', [BasketController::class, 'basketPlace'])->name('basket-place');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
Route::post('/basket/place', [BasketController::class, 'basketConfirm'])->name('basket-confirn');
Route::get('/category_Tehno', [HomeController::class, 'category_Tehno'])->name('category_Tehno');
Route::get('/category_Tooth', [HomeController::class, 'category_Tooth'])->name('category_Tooth');


























/*Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts1', [PostController::class, 'index1']);

Route::get('/posts2/create', [PostController::class, 'create']);

Route::get('/posts/update', [PostController::class, 'update']);

Route::get('/posts/delete', [PostController::class, 'delete']);

Route::get('/posts/firstOrCreate', [PostController::class, 'firstOrCreate']);

Route::get('/posts/updateOrCreate', [PostController::class, 'updateOrCreate']);*/








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
