<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;


Route::get('/', [LandingController::class,'index']);
Route::get('/acercade', [LandingController::class,'AcercaDe']);
Route::get('/domicilios', [LandingController::class,'Domicilios']);
