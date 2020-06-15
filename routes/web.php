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

Route::get('/login', function () {
    return view('login.signin');
});
Route::get('/register', function () {
    return view('login.register');
});
Route::post('/login', 'LoginController@validatelogin');
Route::get('/logout/{id}', 'LoginController@logout');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard.content.index');
    });
});
