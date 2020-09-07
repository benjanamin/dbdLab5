<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/registro', 'UserController@showForm');
Route::get('/datos', 'UserController@showData');

Route::resource('category','CategoryController');
Route::resource('advertisement','AdvertisementController');
Route::resource('order','OrderController');
Route::resource('paymentMethod','paymentMethodController');
Route::resource('permission','PermissionController');
Route::resource('rol','RolController');
Route::resource('rolPermission','RolPermissionController');
Route::resource('user','UserController');
Route::resource('transaction','TransactionController');
Route::resource('valoration','ValorationController');


