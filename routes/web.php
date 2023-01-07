<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersControllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Login pages
Route::get('/',[UsersControllers::class,'loginDisplay']);
Route::post('/',[UsersControllers::class,'loginUser']);
// Home page
Route::get('/homepage',[UsersControllers::class,'homepageDisplay']);
// Register pages
Route::get('/register',[UsersControllers::class,'signInDisplay']);
Route::post('/register',[UsersControllers::class,'createUser']);
// Account pages
Route::get('/account',[UsersControllers::class,'accountDisplay']);
// Update user
Route::get('/account/edit/{id}',[UsersControllers::class,'viewUpdate'])->name('user.update');
Route::post('/account/edit/{id}',[UsersControllers::class,'updateUser'])->name('user.update');
// Delete user
Route::get('/account/delete/{id}',[UsersControllers::class,'deleteUser'])->name('user.delete');
// Logout user
Route::get('/account/logout/{id}',[UsersControllers::class,'logoutUser'])->name('user.logout');

// add to cart
Route::get('/account/cart/{item_id}',[UsersControllers::class,'addToCart'])->name('user.addItem');
// view cart
Route::get('/cart',[UsersControllers::class,'viewCart']);
// remove from cart
Route::get('/cart/remove/{user_id}/{item_id}',[UsersControllers::class,'removeItemFromCart']);
// buy Item
Route::get('/cart/buy/{item_id}/{user_id}',[UsersControllers::class,'viewBuyItem']);
Route::post('/cart/buy/{item_id}/{user_id}',[UsersControllers::class,'buyItem']);