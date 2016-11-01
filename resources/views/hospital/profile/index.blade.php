@extends('layout.hospital.layout')

@section('title',"Hospital's profile")

@section('content')


   @include('include.hospital.header')

   
   <style>
   
       .fileContainer{
	background:#ccc;/* you can give it background img as well*/
	width: 202px;
	height: 31px;
	overflow:hidden;
	position:relative;
	font-size:16px;
	line-height: 31px;
	color:#434343;
	padding: 0px 41px 0 53px;
	margin: 0 auto 60px auto;
	cursor: pointer !important;
}
.fileContainer span{
	overflow:hidden;
	display:block;
	white-space:nowrap;
	text-overflow:ellipsis;
	cursor: pointer;
}
.fileContainer input[type="file"]{
	opacity:0;
	margin: 0;
	padding: 0;
	width:100%;
	height:100%;
	left: 0;
	top: 0;
	position: absolute;
	cursor: pointer;
}
       
       
   </style>
   
  
   
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <div class="row">
          
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
               <!-- Doctor's profile picture Here -->
               <?php
               $hospital_image = $data->hospital_image;
               if($hospital_image == "NA"){
               ?>
              <img class="profile-user-img img-responsive img-circle" src="{{URL::asset('hospital/upload/profileImage/blank.png')}}" alt="User profile picture">
              <div class="fileContainer sprite">
                  <span> choose Profile Image</span>
                  <input type="file"  value="Choose File">
              </div>
              <?php
               }
               else{
                 ?>  
                <img class="profile-user-img img-responsive img-circle" src="{{URL::asset('hospital/upload/profileImage/'.$hospital_image)}}" alt="User profile picture">
              <div class="fileContainer sprite">
                  <span>Change Profile Image</span>
                  <input type="file"  value="Choose File">
              </div>
                    <?php   
               }
              ?>
   
              
              <!-- End Here -->

              <h3 class="profile-username text-center"><?php echo $data->hospitalname;?></h3>

              <a href="#" class="btn btn-primary btn-block"><b>See Details</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Hospital</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Established Year</strong>

              <p class="text-muted">
               <?php echo $data->EstablishedYear?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><b>Address Line 1:</b> <?php echo $data->addressLine1;?></p><br><br>
              <p class="text-muted"><b>Address Line 2:</b> <?php echo $data->addressLine2;?></p><br><br>
              <p class="text-muted"><b>City:</b> <?php echo $data->city;?></p><br><br>
              <p class="text-muted"><b>State:</b> <?php echo $data->state;?></p><br><br>
              <p class="text-muted"><b>Country:</b> <?php echo $data->country;?></p><br><br>
              <p class="text-muted"><b>Pincode:</b> <?php echo $data->pincode;?></p><br><br>
              

              <hr>
               </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">View</a></li>
              <li><a href="#timeline" data-toggle="tab">Edit Department</a></li>
              <li><a href="#settings" data-toggle="tab">Add Department</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <?php
                
                $getDepartment = sizeof($department); 
                
                if($getDepartment != 0){
                  
                    foreach($department as $departmentList){
                       ?> 
                        <div class="post">
                           <?php $department_image = $departmentList->department_image; ?>
                          <h2><?php echo $departmentList->hospital_department ?> </h2>
                          <img src="{{URL::asset('hospital/upload/Department/'.$department_image)}}"><br><br>
                          <b>
                           <?php echo $departmentList->department_description ?>   
                           </b>
                         </div>
                       <?php
                        
                    }
                    
                    
                }
                
                ?>
                
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  
                  <?php 
                  if($getDepartment != 0){
                    foreach($department as $departmentList){
                        $department_image = $departmentList->department_image;
                        $department_id = $departmentList->hospital_department_id;
                     ?>   
                        <li class="time-label">
                        <span class="bg-red">
                         <?php echo $departmentList->created_at?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <img class="direct-chat-img" src="{{URL::asset('hospital/upload/Department/'.$department_image)}}" alt="message user image">

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i><?php echo $departmentList->registerTime ?></span>

                      <h3 class="timeline-header"><a href="#"><?php echo $departmentList->hospital_department?> </a>

                      <div class="timeline-body">
                        <?php echo $departmentList->department_description ?>
                      </div>
                      <div class="timeline-footer">
                        <a href="{{URL::to('hospital/editDepartment/'.$department_id)}}" class="btn btn-primary btn-xs">Edit Department</a>

                        <a href="{{URL::to('hospital/deleteDepartment/'.$department_id)}}" class="btn btn-danger btn-xs">Delete Department</a>
                      </div>
                    </div>
                  </li><?php  
                        
                        
                    }  
                  }
                ?>
               </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                  <form method="post" action="{{URL::to('hospital/add_department')}}" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name of Department</label>

                    <div class="col-sm-10">
                      <input type="text" name="department_name" class="form-control" id="department_name" placeholder="Department Name">
                    </div>
                     </div>
                    
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Department Description</label>

                    <div class="col-sm-10">
                      <textarea id="editor1" name="department_description" rows="10" cols="80">
                        This is Description about the department
                    </textarea>
                    </div>
                  </div>
                    
                <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Image of Department(if Any)</label>

                    <div class="col-sm-10">
                      <input type="file" name="department_image" class="form-control" id="department_image">
                    </div>
               </div>
                    
                 <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Number of Doctors</label>

                    <div class="col-sm-10">
                      <input type="text" name="number_of_doctors" class="form-control" id="number_of_doctors" placeholder="Number of Doctors">
                    </div>
                  </div>
                 
                 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
   </div>
      <!-- /.row -->
</section>
    <!-- /.content -->
  </div>
 <!-- /.content-wrapper -->
 

 

 
 
 
  @include('include.doctor.footer')

  <!-- Control Sidebar -->
   
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

@stop

