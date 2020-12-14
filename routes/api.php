<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//admin 
Route::group([
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});


Route::group([
  'prefix'=> 'news',
], function($router){
    Route::get('/list', [NewsController::class, 'listNews']);
    Route::get('/list/{page}', [NewsController::class, 'getNewsPage']);
    Route::get('/article/{slug}', [NewsController::class, 'getNewsBySlug']);
    Route::get('/article/{id}', [NewsController::class, 'getNewsByID']);
    //
    Route::post('/', [NewsController::class, 'postNews']);
    Route::put('/', [NewsController::class, 'putNews']);
    Route::delete('/', [NewsController::class, 'deleteNews']);

});