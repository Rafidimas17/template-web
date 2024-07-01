<?php

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;
use Buki\AutoRoute\AutoRouteFacade as Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/id',[App\Http\Controllers\Api\PengunjungApi::class,'getShow']);

Route::auto('pengunjung', 'App\Http\Controllers\Api\PengunjungApi');
