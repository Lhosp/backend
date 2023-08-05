<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// custom routes
//Client
Route::get('/clients/{client}/projets', [ClientController::class, 'getClientProjects']);

//Entreprise
Route::get('/entreprises/{entreprise}/projets', [EntrepriseController::class, 'getProjectsByEntreprise']);

//projet
Route::get('/projets/{projet}/locations', [ProjetController::class, 'getLocationByProjet']);


//auth routes
Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::post('/auth/logout', [AuthController::class, 'logoutUser']);
Route::post('/auth/refresh', [AuthController::class, 'refreshToken']);
Route::post('/auth/update', [AuthController::class, 'updateUser']);
Route::post('/auth/password', [AuthController::class, 'updatePassword']);
Route::post('/auth/check', [AuthController::class, 'checkUserWithToken']);
// basics Restful API routes
Route::apiResource('/entreprises', EntrepriseController::class)->middleware('auth:sanctum');
Route::apiResource('/restaurants', RestaurantController::class)->middleware('auth:sanctum');
Route::apiResource('/hotels', HotelController::class)->middleware('auth:sanctum');
Route::apiResource('/clients', ClientController::class)->middleware('auth:sanctum');
Route::apiResource('/projets', ProjetController::class);

