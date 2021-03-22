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
    return view('Pages/HomePage');
});

Route::get('/infopage', function () {
    return view('Pages/InformationPage');
});

Route::get('/allgamespage', function () {
    return view('Pages/AllGamesPage');
});
Route::get('/profilepage', function () {
    return view('Pages/ProfilePage');
});
Route::get('/orderpage', function () {
    return view('Pages/OrderPage');
});
Route::get('/edition1', function () {
    return view('Pages/PictureEdition1');
});
Route::get('/edition2', function () {
    return view('Pages/PictureEdition2');
});
Route::get('/edition3', function () {
    return view('Pages/PictureEdition3');
});
Route::get('/inloggen/azure', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('login');
Route::get('/inloggen/azure/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);



