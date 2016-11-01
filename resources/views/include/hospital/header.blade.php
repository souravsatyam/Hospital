  <header class="main-header">
    <!-- Logo -->
    <a href="{{URL::to('doctor/profile')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $data->hospitalname ?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
     
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
      
          <!-- Tasks: style can be found in dropdown.less -->

                  <!-- end task item -->
                
               
                  <!-- end task item -->
            
             
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php $hospital_image = $data->hospital_image; 
              if($hospital_image == "NA"){
              ?>
              <img src="{{URL::asset('hospital/upload/profileImage/blank.png')}}" class="user-image" alt="User Image">
              <?php
              }
              else{
                  
                ?>
                   <img src="{{URL::asset('hospital/upload/profileImage/'.$hospital_image)}}" class="user-image" alt="User Image">  
                    <?php
                  
              }
              ?>
              <span class="hidden-xs"><?php echo $data->hospitalname; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               
                  <?php $hospital_image = $data->hospital_image; 
              if($hospital_image == "NA"){
              ?>
              <img src="{{URL::asset('hospital/upload/profileImage/blank.png')}}" class="user-image" alt="User Image">
              <?php
              }
              else{
                  
                ?>
                   <img src="{{URL::asset('hospital/upload/profileImage/'.$hospital_image)}}" class="user-image" alt="User Image">  
                    <?php
                  
              }
              ?>

                <p>
                  Patient Name
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{URL::to('hospital/profile')}}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{URL::to('hospital/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>