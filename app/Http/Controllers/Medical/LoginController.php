<?php

namespace App\Http\Controllers\Medical;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    
    public function login(){
        
        return view('medical.login');
        
    }
    
    public function register(){
        
        return view('medical.register');
        
    }
}
