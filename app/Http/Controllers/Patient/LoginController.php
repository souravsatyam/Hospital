<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function login(){
        
        return view('patient.login');
    }
    public function register(){
        
        return view('patient.register');
    }
}
