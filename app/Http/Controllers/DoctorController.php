<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DoctorController extends Controller
{
    //
    
    public function login(){
        return view('doctor.login');
    }
    
    public function register(){
        
        return view('doctor.register');
    }
}
