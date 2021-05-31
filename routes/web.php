<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;

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
    return view('app.dashboard');
});

Route::get('/my-favorite', function () {
    return view('app.my-favorite');
});

// Route::get('/create-list', function () {
//     return view('app.create-list');
// });

// Route::get('/create-list', [PageController::class, 'home']);
Route::get('/create-list', [BookController::class, 'create']);
Route::post('/create-list', [BookController::class, 'store']);


Route::get('/my-favorite', [BookController::class, 'index']);
Route::delete('/books/{books}', [BookController::class, 'destroy']);
