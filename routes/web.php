<?php

use App\Http\Controllers\ShapeController;
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

Route::get('/circle/{radius}', [ShapeController::class, 'circle']);
Route::get('/triangle/{a}/{b}/{c}', [ShapeController::class, 'triangle']);
Route::get('/sum-area/{radius}/{a}/{b}/{c}', [ShapeController::class, 'sumArea']);
Route::get('/sum-diameters/{radius}/{a}/{b}/{c}', [ShapeController::class, 'sumDiameters']);