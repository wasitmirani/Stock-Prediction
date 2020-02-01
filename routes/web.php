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

/*  -------------------------
   | Admin Route Section      |
    -------------------------
*/  




Route::get('/admin','AdminController@index')->name('admin');

Route::prefix('admin')->group(function(){

	Route::get('login','Auth\AdminLoginController@showLoginForm');
	Route::post('login','Auth\AdminLoginController@login')->name('login-admin');

});

Route::get('/bar','HomeController@barchart');


	
/*  -------------------------
   | User Route Section      |
    -------------------------
*/ 


Route::get('/','UController@index' );

/*/Route::get('/users/login',function(){
	return view('auth.login');
});
*/

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/charts/{id}','StockController@index');


Route::post('/store','StockController@store');


Route::post('/message','StockController@Message');
Route::get('/sub','StockController@Sub');