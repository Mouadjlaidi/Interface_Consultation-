<?php

use App\Http\Controllers\ConsultationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ConsultationController::class, 'index']);
