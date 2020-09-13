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
    return view('home.home');
});
Route::get('/registro', 'UserController@showForm');
Route::get('/datos', 'UserController@showData');
Route::get('/usuario', 'UserController@getUserByEmail');
Route::get('/form', 'AdvertisementController@showForm'); //test
Route::post('/add', 'AdvertisementController@postAd');
Route::get('/ad', 'AdvertisementController@showAd');

//Pruebas login con auth y validate
Route::get('/user/loginPage', 'UserController@loginPage');
Route::post('/user/checkLogin', 'UserController@checkLogin');
Route::get('/user/success', 'UserController@success');
Route::get('/user/logout', 'UserController@logout');

//Pruebas publicacion de anuncio y validacion
Route::get('/advertisement/showAdvertisements', 'AdvertisementController@showAdvertisements');

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


