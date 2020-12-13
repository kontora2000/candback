<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//admin 
Route::group([
  'prefix' => 'auth'
], function () {
  Route::post('login', 'AuthController@login');
  Route::post('registration', 'AuthController@registration');
  Route::post('logout', 'AuthController@logout');
  Route::post('refresh', 'AuthController@refresh');
  Route::post('me', 'AuthController@me');
});

// Route::group([
//   'prefix' => 'admin'

// ],
// function(){
//   Route::get('news', 'AdminController@listNews');
//   Route::get('news/{id}', 'AdminController@getNewsByID');
//   Route::get('candidates', 'AdminController@listCandidates');
//   Route::get('candidates/{id}', 'AdminController@getNewsByID');
//   Route::get('parties/{id}', 'AdminController@gerPartByID');
//   Route::get('images/{galleryID}', 'AdminController@getImages');
//   Route::get('parties', 'AdminController@listParties');
// });

//admin getters

// //PUBLIC GETTERS
// Route::get('candidates', 'Candidate\CandidateController@getCandidates');
// Route::get('candidate/{slug}', 'Candidate\CandidateController@getCandidateBySlug');
// Route::get('candidate/{id}', 'Candidate\CandidateController@getCandidateByID');
// Route::get('news/{slug}', 'Candidate\NewsController@getNewsBySlug');
