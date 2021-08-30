<?php

use App\Http\Controllers\ProfilesController;
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

Route::get('/profiles', [ProfilesController::class, 'index']);
Route::get('/insert', [ProfilesController::class, 'create']);
Route::post('/store', [ProfilesController::class, 'store']);
Route::get('/run', function () {
    return view('run');
});
