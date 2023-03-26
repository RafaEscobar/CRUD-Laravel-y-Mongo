<?php

use App\Http\Controllers\Api\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(BlogController::class)->group(function(){
    Route::get('/blogs', 'index');
    Route::post('/store', 'store');
    Route::put('/update/{id}', 'update');
    Route::delete('/destroy/{id}', 'destroy');
});