<?php

use Illuminate\Http\Request;

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

// Route::post('login', 'API\UserController@login')->name('api.login');
// Route::post('register', 'API\UserController@register');

// Route::group(['middleware' => 'auth:api'], function(){
// 	Route::post('details', 'API\UserController@details');
// });

// Route::group(['prefix' => 'auth'], function () {

//     Route::post('login', 'AuthController@login')->name('api.login');
//     Route::post('signup', 'AuthController@signup');
  
//     Route::group(['middleware' => 'auth:api'], function() {
//         Route::get('logout', 'AuthController@logout');
//         Route::get('user', 'AuthController@user');
//     });
// });

Route::post('/sessions/server', function (Request $request) {
    Storage::disk('local')->put('file.txt', $request->get('session_id'));
});

Route::middleware('auth:api')->get('/todos', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
