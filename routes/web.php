<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ContractsController;


Route::get('/', function () { return view('welcome'); });

Route::get('/cars', [CarsController::class, 'index'] );
Route::get('/reservations', [ReservationsController::class, 'index'] );
Route::get('/contracts', [ContractsController::class, 'index'] );
