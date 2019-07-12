<?php

use Illuminate\Http\Request;
use App\User;


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


Route::middleware('auth:api')->get('/users', function (Request $request) {
    return response()->json(\Illuminate\Foundation\Auth\User::all());
});
Route::post('/post/create', 'PostController@store');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/update/{id}', 'PostController@update');
Route::delete('/post/delete/{id}', 'PostController@delete');
Route::get('/posts', 'PostController@index');
/*/Route::get('/users', function (Request $request) {
  //  return response('Hello world',200)
   // ->header('content-Type','text/plain');

});*/
/*Route::get('/users', function (Request $request) {
    return response('Hello world',200)
        ->header('content-Type','text/plain');

});*/