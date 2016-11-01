@extends('layout.medical.layout')

@section('title',"Medical's profile")

@section('content')


   @include('include.medical.header')
   
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
              <img class="profile-user-img img-responsive img-circle" src="{{URL::asset('medical/upload/profileImage/medical_1.jpg')}}" alt="User profile picture">
              <div class="fileContainer sprite">
 <span> choose Profile Image</span>
<input type="file"  value="Choose File">
</div>
              
              <!-- End Here -->

              <h3 class="profile-username text-center">Medical Name Here</h3>

             

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Medicines</b> <a class="pull-right">1,322</a>
                </li>
               
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>See Record</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Medical</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">(Medical's Location Here)</p>

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
              <li class="active"><a href="#activity" data-toggle="tab">View Medicine</a></li>
              <li><a href="#timeline" data-toggle="tab">Edit Medicine</a></li>
              <li><a href="#settings" data-toggle="tab">Add Medicine</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{URL::asset('doctor/upload/profileImage/doctor_1.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">Medicine Name(1)</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Small details about medicine goes here
                  </p>
               </div>
              
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{URL::asset('doctor/upload/profileImage/doctor_1.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">Medicine Name(2)</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Small details about medicine goes here
                  </p>
             

                  
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <img class="direct-chat-img" src="http://localhost:8000/doctor/upload/profileImage/doctor_1.jpg" alt="message user image">

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Medicine Name </a>

                      <div class="timeline-body">
                        Small Description of Doctor's made recommendation on the disease
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Edit Details</a>
                        <a class="btn btn-danger btn-xs">Delete Medicine</a>
                      </div>
                    </div>
                  </li>
               </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                              <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name of Medicine</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Department Name">
                    </div>
                  </div>
                    
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Medicine Description</label>

                    <div class="col-sm-10">
                      <textarea id="editor1" name="editor1" rows="10" cols="80">
                        This is Description about the department
                    </textarea>
                    </div>
                  </div>
                                  
                    <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Concerned With</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Concerned With(eg: fever, eye problem)">
                    </div>
                  </div>
                    
                <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Image of Medicine(if Any)</label>

                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputSkills">
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

