<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::post('kowal/310643/people', [PeopleController::class, 'create']);
Route::get('kowal/310643/people/{people}', [PeopleController::class, 'read']);
Route::put('kowal/310643/people/{people}', [PeopleController::class, 'update']);
Route::delete('kowal/310643/people/{people}', [PeopleController::class, 'delete']);
Route::get('kowal/310643/people', [PeopleController::class, 'readAll']);
