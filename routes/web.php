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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', 'login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/security', 'SecurityController@index')->name('security')->middleware('auth');
Route::post('/security/set', 'SecurityController@set')->name('security-set')->middleware('auth');
Route::delete('/security/delete/{day}', 'SecurityController@deleteOne')->name('security-deleteOne')->middleware('auth');
Route::delete('/security/delete', 'SecurityController@deleteAll')->name('security-deleteAll')->middleware('auth');

Route::get('/light', 'LightController@index')->name('light')->middleware('auth');
Route::post('/light/set', 'LightController@set')->name('light-set')->middleware('auth');
Route::delete('/light/delete/{day}', 'LightController@deleteOne')->name('light-deleteOne')->middleware('auth');
Route::delete('/light/delete', 'LightController@deleteAll')->name('light-deleteAll')->middleware('auth');
Route::post('/light/power', 'LightController@power')->name('light-power')->middleware('auth');

Route::get('/gas', 'GasController@index')->name('gas')->middleware('auth');
Route::post('/gas/power', 'GasController@power')->name('gas-power')->middleware('auth');
Route::post('/gas/time', 'GasController@time')->name('gas-time')->middleware('auth');

Route::get('/fan', 'FanController@index')->name('fan')->middleware('auth');
Route::post('/fan/mode', 'FanController@mode')->name('fan-mode')->middleware('auth');
Route::post('/fan/power', 'FanController@power')->name('fan-power')->middleware('auth');
Route::post('/fan/temperature', 'FanController@temperature')->name('fan-temperature')->middleware('auth');

Route::get('/account', 'AccountController@index')->name('account')->middleware('auth');

Route::get('/notifications', 'NotificationController@index')->name('notification')->middleware('auth');
Route::get('/notifications/viewed/{_id}', 'NotificationController@viewed')->name('notification-viewed')->middleware('auth');

// ->middleware('auth') RUTA PROTEGIDA
//Route::get('/name/{name?}', function($name = 'Bruce'){
//  return "hola" . $name;
//});
