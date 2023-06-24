<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BikeController;
use OpenApi\Annotations as OA;
use OpenApi\Info;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('api/documentation', '\L5Swagger\Http\Controllers\SwaggerController@api')->name('l5-swagger.api');
Route::post('auth/login', [AuthController::class, 'login']);

Route::group([
    'middleware' => 'api',
], function ($router) {

    //Bikes
    Route::group(['prefix' => 'bike'], function(){
        Route::get('', [BikeController::class, 'allBikes']);
        Route::get('{id}', [BikeController::class, 'bikeById']);
    });

});



