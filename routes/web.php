<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\playersController;
use App\Http\Controllers\teamController;

Route::get('/player', [playersController::class, 'players']);
Route::get('/teams', [teamController::class, 'teams']);

