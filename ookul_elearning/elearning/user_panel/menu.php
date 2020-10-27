<body>
        <div class="wrapper animsition">
            <!-- main header -->
            <header class="main-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <!-- top navigation -->
                <nav class="navbar top-nav">
                    <div class="container">
                        <div class="navbar-header hidden-xs">
                            <a class="navbar-brand" href="deshabord"> <img src="upload/<?php echo $web_info['logo']; ?>" alt=""></a>
                        </div>
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav" style="margin-left:625px;">
                            <ul>
                               <h4 style="text-align: center;
    color: white;
    padding-top: 10px;font-weight: 700;">Last Login - <?php echo @$admin['last_login']; ?></h4>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->
                        <!-- /.navbar-header -->
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false">
                                    <i class="dropdowm-icon ti-email"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li class="rad-dropmenu-header"><a href="">New Messages</a></li>
<?php 
$row=$obj->fetchcontactByorder("contact_us");
if($row){
while($rs=mysqli_fetch_assoc($row)){
$row77=$obj->fetchById($rs['user_id'],"user_register","id");
?>
                                    <li>
                                        <a href="contactus" class="rad-content">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="assets/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                                <strong class="inbox-item-author"><?php echo $row77['name']; ?></strong>
                                                <span class="inbox-item-date">-<?php echo $rs['date']; ?></span>
                                                <p class="inbox-item-text"><?php echo $rs['title']; ?></p>
                                                <span class="profile-status offline pull-right"></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php }} ?>
                                    <li class="rad-dropmenu-footer"><a href="contactus">View All messages</a></li>
                                </ul>
                                <!-- /.dropdown-messages -->
                            </li>
                                                       <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="logout">
                                    <i class="dropdowm-icon ti-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="profile.php"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                    
                                    <li><a href="logout.php"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                                </ul>
                            </li> <!-- /.dropdown -->
                        </ul> <!-- /.navbar-top-links -->
                    </div> <!-- /. container -->
                </nav> <!-- /. top navigation -->
                <nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="ti-close"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->
                    <div style="margin-left: 0%;">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand hidden-md hidden-lg" href="brand"><img style="width:100px; height:50px;" src="../admin/upload/<?php echo $web_info['logo']; ?>" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                               
                               
                                    <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i> Topic</a>
                                    <ul class="dropdown-menu">
                                       <!--- <li><a href="add_class.php"><i class="fa fa-table"></i>Class</a></li>-->
                                        <li><a href="subject.php"><i class="fa fa-table"></i>Subject</a></li>
                                        <li><a href="day_wise_topic.php"><i class="fa fa-table"></i>Topic Subject Wise</a></li>
                                    </ul>
                                </li>
                              
                              
                                 <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-paragraph" aria-hidden="true"></i> Topic</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gove_subject.php"><i class="fa fa-paragraph" aria-hidden="true"></i>Topic wise video</a></li>
                                        
                                    </ul>
                                </li>
                           
                           
								<li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layers"></i>Ebook</a>
                                    <ul class="dropdown-menu">
                                        <li><a > <b>
										Add Ebook</b></a></li>
                                         <li><a href="ebook.php"><i class="fa fa-list" aria-hidden="true"></i>Ebook </a></li>
                                        
                                        
                                        
                                    </ul>
                                </li>
                               
                                
                                
                                
                                 
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- Start Side Menu -->
                    
                    <!-- End Side Menu -->
                </nav> <!-- /. main navigation -->
                <div class="clearfix"></div>
            </header> <!-- /. main header -->
    