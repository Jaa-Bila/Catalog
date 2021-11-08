<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'justified']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('multiple-image-upload','master');
Route::get('/image/{$id}', [ImageController::class, 'index']);
Route::get('/{$id}', [PageController::class, 'cost']);
Route::get('/{$id}', 'App\Http\Controllers\PageController@imagePrice');

Route::resource('cost', App\Http\Controllers\CostController::class);

