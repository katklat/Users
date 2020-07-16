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
Auth::routes();
Route::prefix('/')->middleware('auth')->group(function () {

Route::get('/', function () {
    return view('home');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('registrations', 'RegistrationController')->only([
    'index', 'create'
]);
Route::post('/registrations', 'RegistrationController@register')->name('register');
Route::patch('/registrations', 'RegistrationController@unregister')->name('unregister');
Route::resource('/users', 'UserController');

});
