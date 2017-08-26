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
	return view("welcome");
});

//ControllerName@functionName
//parameter가 자동으로 controller로 전달된다.
Route::get('user/{id}','UserController@show');






//Route::resource('post','PostController',['only'=>['index','show','destroy']]);





Route::resource('user.post','PostController');
    

//컨트롤러 계층에따
//namespace App\Http\Controllers\Admin;
//Route::get('dashboard','Admin\AdminController');











