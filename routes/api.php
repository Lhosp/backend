<?php

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

// basics Restful API routes
Route::apiResource('/entreprises', EntrepriseController::class);
Route::apiResource('/restaurants', RestaurantController::class);
Route::apiResource('/hotels', HotelController::class);
Route::apiResource('/clients', ClientController::class);
Route::apiResource('/projets', ProjetController::class);


