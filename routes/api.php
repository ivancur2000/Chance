<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\CompanyController;
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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */
Route::get('company', 'App\Http\Controllers\CompanyController@index');
Route::post('company', 'App\Http\Controllers\CompanyController@Store');
Route::post('company/{id}', 'App\Http\Controllers\CompanyController@Update');
Route::delete('company/{id}', 'App\Http\Controllers\CompanyController@Delete');
