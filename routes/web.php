<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SendController;
use App\Http\Controllers\TourController;
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

Route::get('/', [TourController::class, 'index']);

Route::get("/tour/{id_tour}/details", [TourController::class, "get_details"]);

Route::post("/application/new", [ApplicationController::class, "newApplication"])->name("newApplication");

Route::post("/subscriber/add", [SendController::class, "addSubscriber"])->name("addSubscriber");
