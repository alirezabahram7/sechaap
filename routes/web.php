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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/order/create', 'OrderController@create')->name('order.create');
Route::get('/product/{type_id}', 'ProductController@showByType')->name('products');

Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/editpass', 'UserController@editPass')->name('edit.pass');
Route::post('/updatepass', 'UserController@updatePass')->name('pass.update');


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
Route::get('/admin/login', 'Auth\AdminLoginController@adminLogin')->name('admin.auth.login');

//Route::get('/admin/register', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/admin/login', 'Auth\AdminLoginController@loginAdmin');
//Route::post('/admin/register', 'Auth\RegisterController@createAdmin');

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/','AdminController@dashboard')->name('dashboard');
    Route::get('/logout', 'AdminController@adminLogout')->name('admin.logout');
    Route::get('/order', 'OrderController@index')->name('total.orders');
    Route::get('/users', 'AdminController@usersList')->name('users.list');
    Route::get('/users/{user}', 'OrderController@filterByUser')->name('user.orders');
    Route::patch('/order/{order}', 'OrderController@update')->name('update.order');
    Route::get('/order/status/{statusId}', 'OrderController@filterByStatus')->name('status-filtered.orders');
    Route::get('/order/{order}', 'OrderController@edit')->name('edit.order');

    Route::get('/editpass/{user}', 'AdminController@editPass')->name('admin.edit.pass');
    Route::post('/updatepass/{user}', 'AdminController@updatePass')->name('admin.pass.update');

});
