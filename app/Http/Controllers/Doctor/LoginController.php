<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //
    
    public function login(){
        return view('doctor.login');
    }
    
    public function register(){
        
        return view('doctor.register');
    }
}
