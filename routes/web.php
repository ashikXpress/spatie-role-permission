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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('Dashboard')->middleware(['auth'])->group(function () {
  Route::get('dashboard','DashboardController@index')->name('dashboard');
});

//Auth::routes();
Auth::routes(['register'=>false]);


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');

    Route::resource('users','UserController');

    Route::resource('products','ProductController');

});
