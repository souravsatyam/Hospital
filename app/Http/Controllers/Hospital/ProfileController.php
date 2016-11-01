<?php

namespace App\Http\Controllers\Hospital;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\HospitalModel\Register;
use App\HospitalModel\Department;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;

class ProfileController extends Controller
{
    //
    public function index(Request $request){
        
         $val = Session::get('hosp_id'); 
        
        if($val != ""){
        $data['Profile'] = Register::where('hospital_id','=',$val)->first();
        
        $data['Department']= Department::where('hospital_id', '=' , $val)->get();
        
        
        
        
        
        return view('hospital.profile.index')->with('data',$data['Profile'])->with('department',$data['Department']);
        
    }
    else{
        
        
        Redirect::to('hospital/login')->send();
    }
    }
    
    public function deleteDepartment($id){
        
        $val = Session::get('hosp_id'); 
        
         if($val != ""){
             
             
             $deleteDepartment= Department::where('hospital_department_id', '=' , $id)->delete();
             if($deleteDepartment){
                 
                 return Redirect::to('hospital/profile')->send();
             }
             
             
         }
         else{
             
             
            Redirect::to('hospital/login')->send();  
        }
   }
   
   public function addDepartment(Request $request){
       
    
       //----- To Add Department Here ----//
       $department_name = Input::get('department_name');
     
       $department_description = Input::get('department_description');
       //$department_image = Input::file('department_image');
       $number_of_doctors = Input::get('number_of_doctors');
       
       $imageNameU = Input::file('department_image')->getClientOriginalName();
       
        
        $imageName = time().'_'.$imageNameU.'.'.Input::file('department_image')->getClientOriginalExtension();
        $destiNationPath = base_path().'/public/hospital/upload/Department/';
    
       $request->department_image->move($destiNationPath , $imageName);
       
       $department= new Department;
       $department->hospital_id = Session::get('hosp_id'); 
       $department->hospital_department = $department_name;
       $department->department_description = $department_description;
       $department->department_image = $imageName;
       $department->n_o_d = $number_of_doctors;
       
       $status = $department->save();
       
       if($status){
           
          Redirect::to('hospital/profile')->send();
       }
       
       //----- End Here -----------------//
}
  public function logout(){
       
       $val = Session::get('hosp_id');
       if($val != ""){
           
           Session::put('hosp_id', '');
           Redirect::to('hospital/login')->send();
       }
       
   }
}
