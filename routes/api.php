<?php

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

//Auteur
Route::get("/auteur", [\App\Http\Controllers\AuteurController::class, "getAll"]);
Route::post("/auteur/create", [\App\Http\Controllers\AuteurController::class, "create"]);
Route::post("/auteur/update", [\App\Http\Controllers\AuteurController::class, "update"]);
Route::get("/auteur/delete/{id}", [\App\Http\Controllers\AuteurController::class, "delete"]);

//Livre
Route::get("/livre", [\App\Http\Controllers\LivreController::class, "getAll"]);
Route::post("/livre/create", [\App\Http\Controllers\LivreController::class, "create"]);
Route::post("/livre/update", [\App\Http\Controllers\LivreController::class, "update"]);
Route::get("/livre/delete/{id}", [\App\Http\Controllers\LivreController::class, "delete"]);
