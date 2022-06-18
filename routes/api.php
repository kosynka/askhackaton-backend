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

use App\Http\Controllers\Api\UniversityController;
use App\Http\Controllers\Api\VacancyController;
use App\Http\Controllers\Api\SpecialityController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('universities', UniversityController::class);

Route::apiResource('vacancies', VacancyController::class);

Route::apiResource('specialities', SpecialityController::class);
