@extends('layout.doctor.layout')

@section('title',"Doctor's profile")

@section('content')


   @include('include.doctor.header')
   
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
              <img class="profile-user-img img-responsive img-circle" src="{{URL::asset('doctor/upload/profileImage/doctor_1.jpg')}}" alt="User profile picture">
              
              <!-- End Here -->

              <h3 class="profile-username text-center">Doctor's Name Here</h3>

              <p class="text-muted text-center">Specialization Here</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Patient Request</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Treated</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Pending Request</b> <a class="pull-right">13,287</a>
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
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Affilation</strong>

              <p class="text-muted">
                Affiliation details Here
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">(Doctor's Location Here)</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">(operation skills here)</span>
                
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Experience Summary</strong>

              <p>Doctor's summary here</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">(Specialization related patient)</a></li>
              <li><a href="#timeline" data-toggle="tab">Shared Patient</a></li>
              <li><a href="#settings" data-toggle="tab">Complete your profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{URL::asset('patient/upload/patient_1.jpg')}}" alt="user image">
                        <span class="username">
                          <a href="#">Patient Name</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                   Disease Description
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share related doctor</a></li>
                   
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
              
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{URL::asset('patient/upload/patient_2.jpg')}}" alt="User Image">
                        <span class="username">
                          <a href="#">Patient Name </a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Disease Name - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src=".{{URL::asset('patient/upload/patient_2.jpg')}}" alt="Photo">
                    </div>
                      
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="{{URL::asset('patient/upload/patient_1.jpg')}}" alt="Photo">
                          <br>
                          <img class="img-responsive" src="{{URL::asset('patient/upload/patient_2.jpg')}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="{{URL::asset('patient/upload/patient_1.jpg')}}" alt="Photo">
                          <br>
                          <img class="img-responsive" src="{{URL::asset('patient/upload/patient_2.jpg')}}" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share related doctor</a></li>
                   
            
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
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

                      <h3 class="timeline-header"><a href="#">Doctor Name </a> shared a patient with you</h3>

                      <div class="timeline-body">
                        Disease Small description
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
               </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Current Hospital</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Current Hospital">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Joined Date</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Joined Date">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Total Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience with details"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Upload Profile Image</label>

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

