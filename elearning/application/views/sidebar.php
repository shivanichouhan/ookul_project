

<aside class="sidebar-left">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <h1><a class="navbar-brand" href="<?= base_url('admin/dashboard'); ?>"> 

        <img class="img-responsive" style="display: inline-block; width:100%; vertical-align: sub;" src="<?php echo base_url('/assets/logo.png'); ?>" height="20" width="20"></a></h1>

    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 20px;">
      <ul class="sidebar-menu">
        <li class="header" style="color:#b8c7ce;text-align:center;">MAIN NAVIGATIONS</li>

        <li class="treeview">
          <a href="<?= base_url('admin/dashboard'); ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        

            <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/UserList'); ?>"><i class="fa fa-angle-right"></i> Users List</a></li>
             <li><a href="<?= base_url('admin/addUser'); ?>"><i class="fa fa-angle-right"></i> Add User</a></li>
          </ul>
        </li>   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Video</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/videoList'); ?>"><i class="fa fa-angle-right"></i>Video List</a></li>
            <li><a href="<?= base_url('admin/Trendingvideo'); ?>"><i class="fa fa-angle-right"></i> Trending Video List</a></li>
           
          </ul>
        </li>
         <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-gamepad"></i>
            <span>Vehicles</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/vehicletypeList'); ?>"><i class="fa fa-angle-right"></i>Vehicles List</a></li>
            <li><a href="<?= base_url('admin/addtypeVehicle'); ?>"><i class="fa fa-angle-right"></i> Add Vehicle</a></li>
          </ul>
        </li> -->

       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>All Drivers Location</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/driveronduty'); ?>"><i class="fa fa-angle-right"></i>Drivers are on duty</a></li>
            <li><a href="<?= base_url('admin/driverhasapp'); ?>"><i class="fa fa-angle-right"></i> Drivers have the app</a></li>
             <li><a href="<?= base_url('admin/alldrivermap'); ?>"><i class="fa fa-angle-right"></i>All Drivers</a></li>
          </ul>
        </li> -->
       <!--  <li class="treeview">
          <a href="<?= base_url('admin/PaymentList'); ?>">
            <i class="fa fa-users"></i>
            <span>Payment Gateway</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a> -->
         <!--  <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/PaymentList'); ?>"><i class="fa fa-angle-right"></i>Payment Gateway</a></li>
          </ul> -->
        </li>
        <!-- <li class="treeview">
          <a href="<?= base_url('admin/pendingrequest'); ?>">
            <i class="fa fa-users"></i>
            <span>All schedule Rides</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>        
        </li> -->
         <!-- <li class="treeview">
          <a href="<?= base_url('admin/ongoingrequest'); ?>">
            <i class="fa fa-users"></i>
            <span>All Ongoing Rides</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>        
        </li> -->

         <li class="treeview">
          <a href="<?= base_url('admin/about'); ?>">
            <i class="fa fa-users"></i>
            <span>About</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>        
        </li> 
         <li class="treeview">
          <a href="<?= base_url('admin/privacy_policy'); ?>">
            <i class="fa fa-users"></i>
            <span>Privacy policy</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>        
        </li> 

        <li class="treeview">
          <a href="<?= base_url('admin/terms'); ?>">
            <i class="fa fa-users"></i>
            <span>Terms & Condition</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>        
        </li>


        <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Add Trip</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('admin/addTrip'); ?>"><i class="fa fa-angle-right"></i>Add Normal Trips</a></li>
            <li><a href="<?= base_url('admin/addSchedulingTrip'); ?>"><i class="fa fa-angle-right"></i>Add Scheduling Trips</a></li>            
          </ul>
        </li>   -->             
      </ul>
    </div>
      <!-- /.navbar-collapse -->
  </nav>
</aside>
  </div>

  </div>
<!--left-fixed -navigation-->

<!-- header-starts -->
<div class="sticky-header header-section ">
  <div class="header-left">
    <!--toggle button start-->
    <button id="showLeftPush"><i class="fa fa-bars"></i></button>
    <!--toggle button end-->
    <div class="profile_details_left"><!--notifications of menu start -->      
      <div class="clearfix"> </div>
    </div>
    <!--notification menu end -->
    <div class="clearfix"> </div>
  </div>
  <div class="header-right">
    
    
    
    
    <div class="profile_details">   
      <ul>
        <li class="dropdown profile_details_drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <div class="profile_img"> 
              <span class="prfil-img"><img src="<?= base_url('assets/images/2.jpg'); ?>" alt=""> </span> 
              <div class="user-name">
                <p>Admin </p>
                <span>Administrator</span>
              </div>
              <i class="fa fa-angle-down lnr"></i>
              <i class="fa fa-angle-up lnr"></i>
              <div class="clearfix"></div>  
            </div>  
          </a>
          <ul class="dropdown-menu drp-mnu">
            <!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
            <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
            <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>  -->
            <li> <a href="<?= base_url('admin/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="clearfix"> </div>       
  </div>
  <div class="clearfix"> </div> 
</div>

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstap-validator/bootstrapValidator.min.js'); ?>">
<script type="text/javascript" src="<?= base_url('assets/bootstap-validator/bootstrapValidator.min.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/bootstap-validator/companyValidation.js'); ?>"></script>

<div id="page-wrapper">
    <div class="main-page">