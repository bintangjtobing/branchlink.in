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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.signin');
})->name('login');
Route::get('/register', function () {
    return view('login.register');
});
Route::post('/login', 'LoginController@validatelogin');
Route::get('/logout/{id}', 'LoginController@logout');
Route::post('/register-data/{tokens}', 'LoginController@registeraccount');


Route::get('/u/{username}/', 'viewLink@username');
Route::post('/urllink', 'viewLink@urllink');
// Route::get('/{link}', function (Request $request, $link) {
//     $userlink = DB::table('links')
//         ->select('links.*')
//         ->where('links.link', '=', $link)
//         ->get();
//     dd($userlink);
// });

Route::group(['middleware' => ['auth']], function () {
    Route::get('/administrator', 'LinksController@index');
    Route::get('/link', 'LinksController@index');
    Route::post('/add-links', 'LinksController@addlink');
    Route::get('/delete/{id}', 'LinksController@deletelink');
    Route::post('/update-links/{id}', 'LinksController@updatelink');
    Route::post('/add-avatar/{id}', 'LoginController@addavatar');
    Route::get('/appearance', 'LinksController@appearance');
    Route::get('/settings', 'LinksController@settings');
    Route::post('/add-pageinformations/{id}', 'LinksController@addinformations');
});
