<?php

namespace App\Http\Controllers\Hospital;

use Auth;
#use Session;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\HospitalModel\Register;
use Illuminate\Support\Facades\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    
    public function login(){
        
        return view('hospital.login');
        
    }
    public function register(){
        
         return view('hospital.register');
    }
    
    public function do_register(){
        
       // ----- Hospital Registeration Goes Here ------//
       $data['hospitalname'] = Input::get('hospitalname');
       $data['hospitalemail'] = Input::get('hospitalemail');
       $password = Input::get('hospitalpassword');
       $data['hospital_password']= md5($password);
       $confirm_pasword = Input::get('cpass');
       $data['EstablishedYear']= Input::get('EstablishedYear');
       $data['hospital_contact_number']= Input::get('hospital_contact_number');
       $data['hospital_addres_line_1'] = Input::get('hospital_addres_line_1');
       $data['hospital_address_line_2'] = Input::get('hospital_address_line_2');
       $data['hospital_pincode'] = Input::get('hospital_pincode');
       $data['hospital_city']= Input::get('hospital_city');
       $data['hospital_state']= Input::get('hospital_state');
       $data['hospital_country']= Input::get('hospital_country');
       $mytime = \Carbon\Carbon::now();
       $data['time'] = $mytime->toDateTimeString();
       
       if($password != $confirm_pasword){
           echo "Password Doesnot Match";
           exit();
       }
       
       $email_check = Register::where('hospitalemail','=',$data['hospitalemail'])->first();
       $count_email = count($email_check);
       
        if($count_email >0){
            
            echo "You are already Registered";
            exit();
        }
        
        $hospital_insert = new Register;
        
        //----- Sending Email After Register will be Implemented In future ------//
        
        $hospital_insert->hospitalname = $data['hospitalname'];
        $hospital_insert->hospitalemail = $data['hospitalemail'];
        $hospital_insert->hospitalpassword = $data['hospital_password'];
        $hospital_insert->EstablishedYear = $data['EstablishedYear'];
        $hospital_insert->contactNumber = $data['hospital_contact_number'];
        $hospital_insert->addressLine1 = $data['hospital_addres_line_1'];
        $hospital_insert->addressLine2 = $data['hospital_address_line_2'];
        $hospital_insert->pincode = $data['hospital_pincode'];
        $hospital_insert->city = $data['hospital_city'];
        $hospital_insert->state = $data['hospital_state'];
        $hospital_insert->country = $data['hospital_country'];
        $hospital_insert->hospital_image = "NA";
        $hospital_insert->hospitalactive = 1;
        $hospital_insert->su_ad_hos_active = 1;
        $hospital_insert->registertime = $data['time'];
        
        $success_message = $hospital_insert->save();
        
        if($success_message){
            echo "Successfully Registered";
            Redirect::to('hospital/login')->send();
            exit();
            
        }
        else{
            
           echo "Sorry Some problem";
           exit();
        }
       
      
      //----- End Here -----------------//
 }
 
 
 public function do_login(Request $request){
     $hospitaldata['hospitalpassword']= $request->hospitalpassword;
     $hospitaldata['hospitalemail']= $request->hospitalemail;
     
     
     $password =  md5($hospitaldata['hospitalpassword']);
      
     $check_credential = Register::where('hospitalemail','=', $hospitaldata['hospitalemail'])
                                   ->where('hospitalpassword','=',$password)
                                   ->first();
     
     $check_credential_success= count($check_credential);
     
     if($check_credential_success>0){
        $hosp_id = $check_credential->hospital_id;
        #echo $hosp_id; exit(); 
        Session::put('hosp_id',$hosp_id);
        
        redirect('hospital/profile')->send();
      
        
     }
     else{
         echo "Failure";
         exit();
         
     }
   }
   
   public function check_session(){
       
       $val = Session::get('hosp_id');
       echo $val;
       exit();
   }
 

}
