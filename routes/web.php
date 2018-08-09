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
	// $a = 'How are you?';

	// if (strpos($a, 'are') !== false) {
	//     echo 'true';
	// }
	// $tag=\App\Product::find(1);
	// dd($tag->productdetail);
});
	// Route::get('home', function(){
	// 	return view('webs/index');
	// });
	Route::get('create', function(){
		// foreach (Cart::content() as  $value) {
		// 	dd($value->options->thumbnail);
		// }
		// dd(Cart::content());
		return view('webs/shopping');
		// dd(session('username'));
	});
	Route::get('about', function(){
		return view('webs/about');
	});
	Route::get('list', 'HomeController@list')->name('web.list');
	Route::get('home', 'HomeController@home')->name('web.home');
	Route::post('buycart', 'HomeController@shopping')->name('web.buycart');
	Route::get('shop', 'HomeController@shop')->name('web.shop');
	Route::post('buy', 'HomeController@buy')->name('web.buy');
	Route::delete('delete/{id}', 'HomeController@destroy')->name('web.delete');
	Route::post('update/{id}', 'HomeController@update')->name('web.update');
	Route::get('product/{id}', 'HomeController@product')->name('web.product');
	Route::get('category/{id}', 'CategoryController@product')->name('web.category');
	Route::get('color/{id}', 'ColorController@product')->name('web.color');
	Route::get('size/{id}', 'SizeController@product')->name('web.size');
	Route::get('show/{id}', 'HomeController@show')->name('list.product');
	Route::get('contact', function(){
		return view('webs/contact');
	});
	Route::get('lookbook', function(){
		return view('webs/login');
	});
	Route::get('login/google', 'Auth\LoginController@redirectToProvider');
	Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
	Auth::routes();
	Route::resource('size', 'SizeController');
	Route::resource('color', 'ColorController');

	Route::prefix('admin')->group(function(){
		Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
		Route::post('login', 'AdminAuth\LoginController@login');
		Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

		// Registration Routes...
		Route::get('register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.register');
		Route::post('register', 'AdminAuth\RegisterController@register');

		// Password Reset Routes...
		Route::get('password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
		Route::post('password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
		Route::get('password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');
		
		Route::middleware('admin.auth')->group(function () {
		    Route::get('database','HomeController@index');
		    Route::get('product/list','ProductController@getList')->name('product.list');
		    Route::get('category/list','CategoryController@getList')->name('category.list');
		    Route::get('vendor/list','VendorController@getList')->name('vendor.list');
		    Route::get('size/list','SizeController@getList')->name('size.list');
		    Route::get('color/list','ColorController@getList')->name('color.list');
		    Route::get('productdetail/list','ProductDetailController@getList')->name('productdetail.list');
		    Route::get('productdetail/anydata/{id}','ProductDetailController@anyData')->name('productdetail.data');
		    Route::get('productdetail/show/{id}','ProductDetailController@show');
		    Route::get('productdetail/show1/{id}','ProductDetailController@show1');
		    Route::get('product/anydata','ProductController@anyData')->name('product.data');
		    Route::post('product/update/{id}','ProductController@update');
		    Route::post('category/update/{id}','CategoryController@update');
		    Route::post('vendor/update/{id}','VendorController@update');
		    Route::post('size/update/{id}','SizeController@update');
		    Route::post('color/update/{id}','ColorController@update');
		    Route::post('productdetail/update/{id}','ProductDetailController@update');
		    Route::resource('product','ProductController');
		    Route::resource('color','ColorController');
		    Route::resource('productdetail','ProductDetailController');
		    Route::resource('category','CategoryController');
		    Route::resource('vendor','VendorController');
		    Route::resource('size','SizeController');
		    // Route::get('image-view','ImageProductController@index');
			Route::post('image-view','ImageProductController@store');
			Route::post('image','ImageProductController@store11');

		});

	});

