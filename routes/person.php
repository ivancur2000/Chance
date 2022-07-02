<?php

use App\Http\Controllers\Person\AcademicTrainingController;
use App\Http\Controllers\Person\CurriculumController;
use App\Http\Controllers\Person\PersonController;
use Illuminate\Support\Facades\Route;

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

Route::resource('person', PersonController::class)->names('person');
Route::resource('curriculum', CurriculumController::class)->names('curriculum');
Route::resource('academi-training', AcademicTrainingController::class)->names('academi-training');
