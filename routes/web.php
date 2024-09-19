<?php

use App\Http\Controllers\ConsultationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ConsultationController::class, 'index']);

Route::get('/Consultation_Acheteur', [ConsultationController::class, 'create'])->name('consulatation.create');
