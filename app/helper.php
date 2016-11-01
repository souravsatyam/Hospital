<?php

use App\UserModel;
use App\TicketRecieveModel;
use App\MailViewModel;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function selectManager(){
   $data['record'] = UserModel::leftJoin('teams','users.id','=','teams.team_lead')->get(); 
   
   return $data['record'];
    
}

function assignedto($data){
   $assignedusername =[];
   $assigned_user = TicketRecieveModel::leftJoin('users','mainticket.to','=','users.id')->where('ticket_id','=',$data)->get();
   foreach($assigned_user as $assigner){
     $assignedusername[] =  $assigner-> firstname;
   }
   $assignedusername= implode(',',$assignedusername);
   if(isset($assignedusername)){
       return $assignedusername;
   }
   else{
       return "Unassigned";
   }
    
}

function getTicketCount(){
    
    $data['count'] = MailViewModel::all();
  
    return $data['count'];
    
    
    
    
    
    
}

