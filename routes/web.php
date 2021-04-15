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
    return view('Information/InformationPage');
});

Route::get('/allgamespage', function () {
    return view('pages/AllGamesPage');
});
Route::get('/gamedetail', function () {
    return view('pages/gamedetail');
});
Route::get('/profilepage', function () {
    return view('pages/ProfilePage');
});
Route::get('/orderpage', function () {
    return view('pages/OrderPage');
});
Route::get('/edition1', function () {
    return view('pictures/PictureEdition1');
});
Route::get('/edition2', function () {
    return view('pictures/PictureEdition2');
});
Route::get('/edition3', function () {
    return view('pictures/PictureEdition3');
});
Route::get('/adminpage', function () {
    return view('admin/adminpage');
});

Route::get('/inloggen/azure', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('login');
Route::get('/inloggen/azure/callback', [\App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);
Route::get('detail/{id}', [\App\Http\Controllers\GamesController::class, 'show']);

Route::get('editpic/{id}', [\App\Http\Controllers\PicturesController::class, 'edit']);
Route::post('editpic/', [\App\Http\Controllers\PicturesController::class, 'update']);

Route::get('edit/', [\App\Http\Controllers\InformationController::class, 'edit']);
Route::post('update/', [\App\Http\Controllers\InformationController::class, 'update']);

Route::get('/edition1', [\App\Http\Controllers\PicturesController::class, 'picture1']);
Route::get('/edition2', [\App\Http\Controllers\PicturesController::class, 'picture2']);
Route::get('/edition3', [\App\Http\Controllers\PicturesController::class, 'picture3']);
Route::get('/pictureedit',[\App\Http\Controllers\PicturesController::class, 'show']);
Route::resource('/games', \App\Http\Controllers\GamesController::class);
Route::resource('/information', \App\Http\Controllers\InformationController::class);
Route::get('/inschrijven', [\App\Http\Controllers\InschrijvenController::class, 'index']);
Route::post('/inschrijven', [\App\Http\Controllers\InschrijvenController::class, 'register']);
Route::post('/detail/{id}', [\App\Http\Controllers\GamesInschrijvingController::class, 'register']);
Route::resource('/admin', \App\Http\Controllers\Auth\LoginController::class);




