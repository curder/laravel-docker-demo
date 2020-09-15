<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PriceController;

Route::get('/', [PriceController::class, 'index']);
