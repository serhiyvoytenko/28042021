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

Route::get('/guest', function () {
    return view('guest');
});

Route::view('/hi', 'HI');

Route::group(['middleware' => 'guest'], static function () {
    Route::view('register', 'guest.register');
    Route::get('login', [
        'as' => 'login',
        'uses' => fn() => view('guest.login'),
    ]);
    Route::post('register', 'App\Http\Controllers\GuestController@register');
    Route::post('login', ['as' => 'login', 'uses' => 'App\Http\Controllers\GuestController@login']);
});
