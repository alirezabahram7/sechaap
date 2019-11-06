<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/order/create','OrderController@create')->name('order.create');
Route::get('/product/{type_id}','ProductController@showByType')->name('products');

Route::get('/profile','UserController@profile')->name('profile');
Route::get('/editpass','UserController@editPass')->name('edit.pass');
Route::post('/updatepass','UserController@updatePass')->name('pass.update');


Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
})->name('logout');