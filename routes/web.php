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
    return view('pages/HomePage');
})->name('index');

Route::get('/infopage', function () {
    return view('pages/InformationPage');
});

Route::get('/allgamespage', function () {
    return view('pages/AllGamesPage');
});
Route::get('/profilepage', function () {
    return view('pages/ProfilePage');
});
Route::get('/orderpage', function () {
    return view('pages/OrderPage');
});
Route::get('/edition1', function () {
    return view('pages/PictureEdition1');
});
Route::get('/edition2', function () {
    return view('pages/PictureEdition2');
});
Route::get('/edition3', function () {
    return view('pages/PictureEdition3');
});
Route::get('/inloggen/azure', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('login');
Route::get('/inloggen/azure/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

Route::resource('/games', \App\Http\Controllers\GamesController::class);
Route::resource('/drinks', \App\Http\Controllers\FoodController::class);
Route::resource('/drinks', \App\Http\Controllers\DrinksController::class);



