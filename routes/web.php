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

Route::get('cart', 'ShoppingCartController@index')->name('cart.index');
Route::post('add-to-cart', 'ShoppingCartController@addToCart')->name('add.to.cart');
Route::patch('update-cart', 'ProductsController@update');
Route::get('remove-from-cart/{index}', 'ShoppingCartController@remove')->name('remove.from.cart');

Route::get('/order/create/{type}', 'OrderController@create')->name('order.create');
Route::post('/order', 'OrderController@store')->name('order.store');
Route::get('/product/{type_id}', 'ProductController@showByType')->name('products');

Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/editpass', 'UserController@editPass')->name('edit.pass');
Route::post('/updatepass', 'UserController@updatePass')->name('pass.update');

Route::get('/search', 'OrderController@search')->name('code.search');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
Route::get('/admin/login', 'Auth\AdminLoginController@adminLogin')->name('admin.auth.login');

//Route::get('/admin/register', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/admin/login', 'Auth\AdminLoginController@loginAdmin');
//Route::post('/admin/register', 'Auth\RegisterController@createAdmin');

Route::get('message','MessageController@create')->name('contact.us');
Route::post('message','MessageController@store')->name('store.message');

Route::get('about-us','AdminController@aboutUs')->name('about.us');
Route::get('help','AdminController@help')->name('help');


Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/','OrderController@index')->name('dashboard');
    Route::get('/logout', 'AdminController@adminLogout')->name('admin.logout');
    Route::get('/order', 'OrderController@index')->name('total.orders');
    Route::get('/users', 'AdminController@usersList')->name('users.list');
    Route::get('/users/{user}', 'OrderController@filterByUser')->name('user.orders');
    Route::patch('/order/{order}', 'OrderController@update')->name('update.order');
    Route::get('/order/status/{statusId}', 'OrderController@filterByStatus')->name('status-filtered.orders');
    Route::get('/order/{order}', 'OrderController@edit')->name('edit.order');

    Route::get('/editpass/{user}', 'AdminController@editPass')->name('admin.edit.pass');
    Route::post('/updatepass/{user}', 'AdminController@updatePass')->name('admin.pass.update');

    Route::get('/edit-admin-pass', 'AdminController@editAdminPass')->name('edit.admin.pass');
    Route::post('/update-admin-pass', 'AdminController@updateAdminPass')->name('update.admin.pass');

    Route::get('/product', 'ProductController@index')->name('admin.products');
    Route::get('/product/edit/{product}', 'ProductController@edit')->name('admin.edit.product');
    Route::patch('/product/{product}', 'ProductController@update')->name('admin.update.product');
    Route::get('/product/create', 'ProductController@create')->name('admin.create.product');
    Route::delete('product/{product}','ProductController@destroy')->name('product.delete');
    Route::post('/product', 'ProductController@store')->name('admin.store.product');

    Route::get('/image', 'ImageController@edit')->name('admin.edit.images');
    Route::patch('/image', 'ImageController@update')->name('admin.update.images');
    Route::get('/delete-image/{image}', 'ImageController@destroy')->name('admin.delete.images');

    Route::get('/text', 'TextController@edit')->name('admin.edit.texts');
    Route::patch('/text', 'TextController@update')->name('admin.update.texts');

    Route::get('/message', 'MessageController@index')->name('admin.messages.list');
    Route::get('/message/{message}', 'MessageController@edit')->name('admin.show.message');
    Route::patch('/message/{message}', 'MessageController@update')->name('admin.update.message');

    Route::resource('type','TypeController');
    Route::get('edit-type/{type}','TypeController@edit');
    Route::get('addition-list/{typeId}','AdditionController@typeAdditions');
    Route::get('create-addition','AdditionController@create')->name('addition.create');
    Route::get('edit-addition/{addition}','AdditionController@edit')->name('addition.create');
    Route::post('addition','AdditionController@store')->name('addition.store');
    Route::patch('addition/{addition}','AdditionController@update')->name('addition.update');
    Route::delete('addition/{addition}','AdditionController@destroy')->name('addition.delete');
    Route::get('addition','AdditionController@index')->name('addition.list');
});
