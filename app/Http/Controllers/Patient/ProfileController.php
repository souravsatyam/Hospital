<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function index(){
        
        return view('patient.profile.index');
        
    }
}
