<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WebController;
use App\Models\Data;
use Illuminate\Support\Facades\DB;

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
    return view('index');
})->name('home');
Route::get('/wish', [WebController::class, 'wishPage'])->name('wish');
Route::post('/postToServer', [PostController::class, 'postToServer'])->name('postToServer');
Route::get('/success', [WebController::class, 'success'])->name('success');

// Route::get('/wish/{id}', [AjaxController::class, 'getData']);
Route::get('/wish/{id}', [WebController::class, 'viewWish']);