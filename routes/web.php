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

Route::get('/security', 'SecurityController@index')->name('security')->middleware('auth');
Route::put('/security/update', 'SecurityController@update')->name('security-update')->middleware('auth');
Route::delete('/security/delete/{day}', 'SecurityController@deleteOne')->name('security-deleteOne')->middleware('auth');
Route::delete('/security/delete', 'SecurityController@deleteAll')->name('security-deleteAll')->middleware('auth');

Route::get('/light', 'LightController@index')->name('light')->middleware('auth');

Route::get('/gas', 'GasController@index')->name('gas')->middleware('auth');

Route::get('/fan', 'FanController@index')->name('fan')->middleware('auth');

Route::get('/account', 'AccountController@index')->name('account')->middleware('auth');

Route::get('/notifications', 'NotificationController@index')->name('notification')->middleware('auth');

// ->middleware('auth') RUTA PROTEGIDA
//Route::get('/name/{name?}', function($name = 'Bruce'){
//  return "hola" . $name;
//});
