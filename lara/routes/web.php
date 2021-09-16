<?php

use App\Http\Controllers\ProductEntityController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/guest', function () {
//    return view('guest');
//});
//
//Route::view('/hi', 'HI');

//Route::group(['middleware' => 'guest'], static function () {
//    Route::get('register', fn() => view('guest.register'));
//    Route::get('login', [
//        'as' => 'login',
//        'uses' => fn() => view('guest.login'),
//    ]);
//    Route::post('register', [GuestController::class, 'register']);
//    Route::post('login', ['as' => 'login', 'uses' => 'App\Http\Controllers\GuestController@login']);
//});
//

Route::middleware(['guest'])->group(static function () {
    Route::get('register', fn() => view('guest.register'));
    Route::get('login', [
        'as' => 'login',
        'uses' => fn() => view('guest.login'),
    ]);
    Route::get('/users/{user}', fn(User $user)=>$user->email);
    Route::post('register', [GuestController::class, 'register']);
    Route::post('login', ['as' => 'login', 'uses' => 'App\Http\Controllers\GuestController@login']);
});

Route::group(['middleware' => 'auth'], static function () {
    Route::get('', 'App\Http\Controllers\IndexController@index');
    Route::get('view-products',[ProductEntityController::class, 'index']);
    Route::get('hi',[ProductEntityController::class, 'hi']);
    Route::get('logout', 'App\Http\Controllers\UserController@logout');
//    Route::post('import.excel', 'App\Http\Controllers\ExcelController@import')->name('import.excel');
});

