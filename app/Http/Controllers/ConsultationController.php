<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index() {
        return view('consultation');
    }

    public function create() {
        return view('ConsultationForm');
    }
    
}
