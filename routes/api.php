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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('handshake',function (){
    return response()->json(['data'=>'data, returned by the Server','status'=>200],200);
});
Route::resource('Users', 'UserController');
Route::resource('Ingredients', 'IngredientController');
Route::resource('Events', 'EventController');
Route::resource('Plats', 'PlatController');
Route::resource('Reservations', 'ReservationController');
Route::resource('Restaurants', 'RestaurantController');
Route::resource('Tables', 'TableController');