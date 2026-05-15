<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

Route::get('/', [FoodController::class, 'index']);

Route::get('/food/{id}', [FoodController::class, 'show']);