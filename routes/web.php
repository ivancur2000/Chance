<?php

use App\Http\Controllers\Auth\ExternalAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function(){
    return view('index');
});

Route::get('login-google', [ExternalAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('google-callback', [ExternalAuthController::class, 'handleGoogleCallback'])->name('auth.callback');

Route::get('login-facebook', [ExternalAuthController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('facebook-callback', [ExternalAuthController::class, 'handleFacebookCallback'])->name('facebook.callback');



Route::resource('companies', 'App\Http\Controllers\CompanyController');
Route::resource('jobOffer', 'App\Http\Controllers\JobOfferController');
Route::resource('professions', 'App\Http\Controllers\ProfesionController');

