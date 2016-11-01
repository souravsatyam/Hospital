var app = angular.module('app', []);

app.controller('registerController', function($scope) {
    $scope.Validate = function(){
        
       var hospitalname = $scope.hospitalname;
       var hospitalemail = $scope.hospitalemail;
       var hospitalpassword = $scope.hospitalpassword;
       var confirm_hospital_password = $scope.confirm_hospital_password;
       var EstablishedYear = $scope.EstablishedYear;
       var hospital_contact_number = $scope.hospital_contact_number;
       var hospital_addres_line_1 = $scope.hospital_addres_line_1;
       //var hospital_address_line_2= $scope.hospital_address_line_2;
       var hospital_pincode = $scope.hospital_pincode;
       var hospital_city = $scope.hospital_city;
       var hospital_state = $scope.hospital_state;
       var hospital_country = $scope.hospital_country;
      
       //------- Hospital Name Validation ------ //
       if(hospitalname == "" || typeof hospitalname == "undefined"){
           $('.error').html("Hospital Name is required");
           return false;
       }
       //------- End Here ---------------------//
       //-------- Email Validation Here --------//
       alert(hospitalemail);
       if(hospitalemail == "" || typeof hospitalemail == "undefined"){
           $('.error').html("Hospital Email is required");
           return false;
       }
       //-------- End Here ------------------//
       
       //--------- Password Validation Here -----------//
       
       if(hospitalpassword == "" || typeof hospitalpassword == "undefined"){
           $('.error').html("Hospital Password is required");
       }
       //--------- End Here --------------------------//
       
       //------------  Confirm Password Validation -------//
       if(confirm_hospital_password == "" || typeof confirm_hospital_password == "undefined"){
           $('.error').html("Confirm Your Password");
           return false;
       }
       //------------- End Here ---------------------------//
       //-------------- Establish Year Validation -----------//
       
       if(EstablishedYear == "" || typeof EstablishedYear == "undefined"){
           $('.error').html("Please Enter the Established year");
           return false;
       }
       //------------------ End Here ----------------//
       //--------------  Hospital Contact Number Validation ----------//
         if(hospital_contact_number == "" || typeof hospital_contact_number == "undefined"){
           $('.error').html("Please Enter the hospital Contact Number");
           return false;
       }
       //---------------- End Here ------------------------------//
       
       //------ Address Line 1 Validation ------------------//
        if(hospital_addres_line_1 == "" || typeof hospital_addres_line_1 == "undefined"){
           $('.error').html("Please Enter hospital address");
           return false;
       }
       //---------- End Here ----------------------------//
       
       //--------- Pincode Validation -----------------------//
         if(hospital_pincode == "" || typeof hospital_pincode == "undefined"){
           $('.error').html("Please Enter hospital pincode");
           return false;
       }
       //---------- End HEre ---------------------------------//
       
       //--------------- Hosputal City -----------------------//
       
         if(hospital_city == "" || typeof hospital_city == "undefined"){
           $('.error').html("Please Enter the hospital City");
           return false;
       }
       
       //-------------- End Here ------------------//
       
       //------------- Hospital State -------------//
       
       
        if(hospital_state == "" || typeof hospital_state == "undefined"){
           $('.error').html("Please Enter the hospital State");
           return false;
       }
        //-------------- End Here -------------//
        
        //--------- Hospital Country -------//
         if(hospital_country == "" || typeof hospital_country == "undefined"){
           $('.error').html("Please Enter the Hospital Country");
           return false;
       }
        //---- End Here ---------------//
        
        var emailValidate = $scope.validateName(hospitalemail);
        if(emailValidate == true){
            
           var matchpassword = $scope.matchPassword(hospitalpassword,confirm_hospital_password);
           if(matchpassword == true){
               
               var matchEstablishedYear = matchEstablishedYear(EstablishedYear);
               if(matchEstablishedYear == true){
                  var contactnumberValidation =  contactnumberValidation(hospital_contact_number);
                  if(contactnumberValidation == true){
                      
                      var pincode = getPincode(hospital_pincode);
                   
                  
               }
               
           }
        }
      }
      
    }
     
     //----- adding referencial Link ------//
     $scope.validateName = function(a){
          var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
     if (filter.test(a)) {
        return true;
    }
    else {
        $('.error').html('Please Enter a valid Email Address')
        return false;
    }
 }
 
 $scope.matchPassword = function(a,b){
     
       if(a.length<6){
          $('.error').html('Please Enter the password atleast six Character');
          return false;
      }
      
      if(a===b){
          return true;
      }
      else{
          $('.error').html('Confirm Password and Password doesnot match');
          return false;
      }
      
 }
 
 $scope.matchEstablishedYear = function(a){
     var numbers = /^[0-9]+$/; 
      
     
     
     
     if(a.value.match(numbers))  
      {  
        var d = new Date();
        var n = d.getFullYear();
        if(a>n){
            $('.error').html('Sorry Established Year cannot be greater than current year');
            return false;
        }
        
        return true;  
      }  
      else  
      {  
      $('.error').html("Establish year will be only Number"); 
      return false;  
      }  
     
 }
 
 $scope.contactnumberValidation = function(a){
     
     var phoneno = /^\d{10}$/; 
     if(a.value.match(phoneno)) {
         return true;
     }
     else{
         $(".error").html("Sorry Invalid Phone number");
         return false;
         
     }
 }
 
 $scope.getPincode = function(a){
     var pincode_pattern=/^\d{6}$/;
     
     if(pincode_pattern.test(a)){
         $('.error').html('Sorry Established Year cannot be greater than current year');
           alert("All information is correct");
            return true;
         
     }
     else{
         
         return false;
     }
     
 }
 


  
  });

