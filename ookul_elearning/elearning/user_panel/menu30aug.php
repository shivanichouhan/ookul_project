<body>
        <div class="wrapper animsition">
            <!-- main header -->
            <header class="main-header">
                <!-- top navigation -->
                <nav class="navbar top-nav">
                    <div class="container">
                        <div class="navbar-header hidden-xs">
                            <a class="navbar-brand" href="deshabord"> <img src="upload/<?php echo $web_info['logo']; ?>" alt=""></a>
                        </div>
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav" style="margin-left:625px;">
                            <ul>
                               <h4 style="    text-align: center;
    color: white;
    padding-top: 10px;font-weight: 700;">Last Login - <?php echo $admin['last_login']; ?></h4>
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
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                    <i class="dropdowm-icon ti-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="profile"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                    
                                    <li><a href="logout"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
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
                    <div class="container">
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
                                <!--<li class="active"><a href="index.html"><i class="ti-home"></i> Dasboard</a></li>-->
                             <li class="dropdown">
                                    <a href="web_setting" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i>   Setting</a>
                                    <ul class="dropdown-menu">
                                        <!--<li><a href="state"><i class="fa fa-window-minimize"></i>State</a></li>-->
                                        <li><a href="web_setting"><i class="fa fa-cogs" aria-hidden="true"></i>Setting</a></li>
                                         <li><a href="demo_video"><i class="fa fa-laptop" aria-hidden="true"></i>Demo</a></li>
                                          <li><a href="search"><i class="fa fa-search" aria-hidden="true"></i>Search</a></li>
                                           <li><a href="add_instruction"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Instruction</a></li>
                                    </ul>
                                </li>
                                         <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-map-marker" aria-hidden="true"></i>Location</a>
                                    <ul class="dropdown-menu">
                                        <!--<li><a href="state"><i class="fa fa-window-minimize"></i>State</a></li>-->
                                        <li><a href="city"><i class="fa fa-stop" aria-hidden="true"></i>District</a></li>
                                         <li><a href="block"><i class="fa fa-th" aria-hidden="true"></i>Block</a></li>
                                          <li><a href="add_school"><i class="fa fa-th" aria-hidden="true"></i>School</a></li>
                                    </ul>
                                </li>
                                   <li class="dropdown">
                                    <a href="academic" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Academic</a>
                                    <ul class="dropdown-menu">
                                        <!--<li><a href="state"><i class="fa fa-window-minimize"></i>State</a></li>-->
                                        <li><a href="academic"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Academic Year</a></li>
                                    <li><a href="academuc_user_list"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Session According Payment List Student</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle" aria-hidden="true"></i> User</a>
                                    <ul class="dropdown-menu">
                                     <li><a href="add_user"><i class="fa fa-user-plus" aria-hidden="true"></i>Add User</a></li>
                                     <li><a href="sub_agent"><i class="fa fa-users" aria-hidden="true"></i>Block Supervisor</a></li>
                                      <li><a href="add_agent"><i class="fa fa-users" aria-hidden="true"></i>Executive Supervisor</a></li>
                                      <li><a href="add_distric_holder"><i class="fa fa-users" aria-hidden="true"></i>Distric Holder</a></li>
                                      
                                      <li><a href="referal_agent"><i class="fa fa-users" aria-hidden="true"></i>Relationship Manager</a></li>
                                       <li><a href="add_super_admin"><i class="fa fa-users" aria-hidden="true"></i>Employee</a></li>
                                      
                                      
                                      	<li><a href="parents_list"><i class="fa fa-table"></i>Parents List</a></li>
                                      	 <!--	<li><a href="parents_list"><i class="fa fa-table"></i>Parents List</a></li>-->
                                      	 		<li><a href="pro_user_list"><i class="fa fa-table"></i>PRO User List</a></li>
                    
                                    
                                       
                                    </ul>
                                </li>
                              
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i> Class</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="add_class"><i class="fa fa-table"></i>Class</a></li>
                                        <li><a href="add_subject"><i class="fa fa-table"></i>Subject</a></li>
                                        <li><a href="chapter"><i class="fa fa-table"></i>Chapter</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-inr" aria-hidden="true"></i>Price Plan</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="price"><i class="fa fa-gift" aria-hidden="true"></i>Add Price Plan</a></li>
                                          <li><a href="price_plan"><i class="fa fa-gift" aria-hidden="true"></i>Price Plan Image</a></li>
                                          <li><a href="referal_amount_set"><i class="fa fa-gift" aria-hidden="true"></i>PRO Price </a></li>
                                        
                                    </ul>
                                </li>
                                
                                 <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-paragraph" aria-hidden="true"></i> Topic</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="add_topic"><i class="fa fa-paragraph" aria-hidden="true"></i>Add Topic</a></li>
                                        <li><a href="topic_wise_video"><i class="fa fa-paragraph" aria-hidden="true"></i>Topic wise video</a></li>
                                        
                                    </ul>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i>Contant  </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="add_contant"><i class="fa fa-table"></i>Contant Class Wise</a></li> 
                                       
                                    </ul>
                                </li>-->
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-text-width" aria-hidden="true"></i> Test Question</a>
                                    <ul class="dropdown-menu">
                                     
                                       <!--<li><a href="question_answer"><i class="ti-layout-tab-window"></i>Question And Answer</a></li>-->
                                       <li><a href="question_answer_new"><i class="ti-layout-tab-window"></i>Question And Answer</a></li>
                                       
                                        <li><a href="multipal_question"><i class="ti-layout-width-default"></i> Multipal Question And Answer</a></li>
                                        
                                        <li><a href="question_tru_false"><i class="ti-close"></i>True False Question</a></li>
                                    </ul>
                                </li>
                                <!--<li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i> Shopping
                                    <ul class="dropdown-menu">
                                    
                                    <li><a href="category"><i class="fa fa-table"></i>Category</a></li>
                                    
                                        <li><a href="add_shopping_product"><i class="fa fa-table"></i> Add Product</a></li>
                                        <li><a href="postal_charge"><i class="fa fa-money"></i> Add Delivery Charges</a></li>
                                        
                                         <li><a href="order_list"><i class="fa fa-table"></i>Order List</a></li>

                                    </ul>
                                </li>-->
                                    <li class="dropdown">
                                    <a href="coupan" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tags" aria-hidden="true"></i>Coupan
                                    <ul class="dropdown-menu">
                                        <li><a href="coupan"><i class="fa fa-tags" aria-hidden="true"></i> Add Coupan</a></li>
                                         <li><a href="relasedcoupan"><i class="fa fa-tags" aria-hidden="true"></i> Relased Coupan</a></li>
                                         <li><a href="asign_user_list"><i class="fa fa-tags" aria-hidden="true"></i> Assigned Coupan</a></li>
                                         
                                        
                                    </ul>
                                </li>
                                        <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh" aria-hidden="true"></i> Latest Update
                                    <ul class="dropdown-menu">
                                        <li><a href="latest_update"><i class="fa fa-refresh" aria-hidden="true"></i>Latest Update</a></li>
                                         <li><a href="latest_update_list"><i class="fa fa-list" aria-hidden="true"></i>Latest Update List</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i>Result 
                                    <ul class="dropdown-menu">
                                     
                                         <li><a href="result_list"><i class="fa fa-list" aria-hidden="true"></i>Result List</a></li>
                                       
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layers"></i>Report</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="user_payment_conform_list"><i class="fa fa-key"></i>User Report</a></li>
                                        <li><a href="sub_agent_report"><i class="fa fa-key"></i>Block Supervisor Report</a></li>
                                        <li><a href="agent_report"><i class="fa fa-key"></i>Executive Supervisor</a></li>
                                       <li><a href="referal_agent_report"><i class="fa fa-key"></i>Relationship Manager Report</a></li>
                        
                                  <li><a href="pro_panel_list"><i class="fa fa-key"></i>PRO Reoprt</a></li>
                                  <li><a href="final_block_supervioser_report"><i class="fa fa-key"></i>Block Supervisor Filter Report</a></li>
                                  <li><a href="final_exequtive_supervioser_report"><i class="fa fa-key"></i>Executive Supervisor Filter Report</a></li>
                                   <li><a href="final_RM_report"><i class="fa fa-key"></i>Relactionship Manager Filter Report</a></li>
                                    <li><a href="final_pro_report"><i class="fa fa-key"></i> Filter Report PRO</a></li>
                                    <li><a href="royalty_program_report"><i class="fa fa-key"></i> Royalty Program </a></li>
   
                                       <!-- <li><a href="agent_report"><i class="fa fa-key"></i>Exe/cutive Supervisor Report</a><li>
                                            <li><a href="user_payment_conform_list"><i class="fa fa-key"></i>User Report</a></li>
                                            <li><a href="referal_agent_report"><i class="fa fa-key"></i>Relactionship Manager Report</a></li>
                                                <li><a href="demo_report"><i class="fa fa-key"></i>User Report With Search Filter</a></li>-->
                                            
                                        
                                        
                                    </ul>
                                </li>
                                    <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i>Unit Test  </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="unit_question"><i class="fa fa-question-circle" aria-hidden="true"></i>Unit Test Question</a></li> 
                                       <li><a href="unit_answer"><i class="ti-layout-tab-window"></i>Unit Test Answer</a></li>
                                      <!----  <li><a href="demo_unit_question"><i class="ti-layout-tab-window"></i>Demo Unit Test Question</a></li> 
                                         <li><a href="demo_unit_answer"><i class="ti-layout-tab-window"></i>Demo Unit Test Answer</a></li>-->
                                       
                                       
                                    </ul>
                                </li>
                                 <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i>Virtual Class Room </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="chemistry"><i class="fa fa-table"></i>Chemistry Lab</a></li> 
                                    </ul>
                                </li>
                             
                                  
                                  <li class="dropdown megamenu-fw">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Government exam</a>
                                    <ul class="dropdown-menu megamenu-content" role="menu">
                                        <li>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu One</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="goverment_user_list.php"><i class="fa fa-table"></i>User List</a></li>
                                                            <li><a href="add_tack.php"><i class="fa fa-table"></i>Add Task</a></li> 
                                                			<li><a href="days.php"><i class="fa fa-table"></i>Add Days </a></li>
                                                            <li><a href="add_language.php"><i class="fa fa-table"></i>Add Language </a></li>
                                                            <li><a href="goverm_papular_video.php"><i class="fa fa-table"></i>Add Popular </a></li>
                                                        	<li><a href="gove_class.php"><i class="fa fa-table"></i>Add Level </a></li>
                                                        	<li><a href="gov_plan.php"><i class="fa fa-table"></i>Plan </a></li>
                                                        	<li><a href="video_class.php"><i class="fa fa-table"></i>Video Class </a></li>
                                                        	
                        		                            <li><a href="gover_price.php"><i class="fa fa-table"></i>Add Price Plan </a></li>
                        		                             <li><a href="subject.php"><i class="fa fa-table"></i>Subject </a></li>
                                                       
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu Two</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            
                                                                <li><a href="gove_subject.php"><i class="fa fa-table"></i>Add Topic </a></li> 
                                                            	<li><a href="online_exam.php"><i class="fa fa-table"></i>Online Questions </a></li>
                                                                <li><a href="exam_time.php"><i class="fa fa-table"></i>Online Exam </a></li>
                                                                <li><a href="gov_assigment.php"><i class="fa fa-table"></i>Assigenment </a></li>
                                                                <li><a href="ebook.php"><i class="fa fa-table"></i>E-Book </a></li>
                                                                <li><a href="routing.php"><i class="fa fa-table"></i>Routing </a></li>
                                                                <li><a href="gorv_contactus.php"><i class="fa fa-table"></i>Contact Us </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                             
                                           
                                                <!-- end col-3 -->
                                      

                                                <!-- end col-3 -->
                                            </div>
                                        </div>
                                            <!-- end row -->
                                        </li>
                                    </ul>
                                </li>
                                
                                <!---  <ul class="dropdown-menu">
                                    <li><a href="goverment_user_list.php"><i class="fa fa-table"></i>User List</a></li>
                                     <li><a href="add_tack.php"><i class="fa fa-table"></i>Add Task</a></li> 
                        			 <li><a href="days.php"><i class="fa fa-table"></i>Add Days </a></li>
                        
                                    <li><a href="add_language.php"><i class="fa fa-table"></i>Add Language </a></li>
                               <li><a href="goverm_papular_video.php"><i class="fa fa-table"></i>Add Popular </a></li>
                                <!---<li><a href="exam_type.php"><i class="fa fa-table"></i>Add Exam Type </a></li> 
                              		   
                              	<li><a href="gove_class.php"><i class="fa fa-table"></i>Add Level </a></li>
                        		     <li><a href="gover_plan.php"><i class="fa fa-table"></i>Add price Plan </a></li>
                        
                              	<li><a href="gorv_contactus.php"><i class="fa fa-table"></i>Contact Us </a></li>
                        		
                              	<li><a href="gove_subject.php"><i class="fa fa-table"></i>Add Assigenment </a></li> 
                        		<li><a href="online_exam.php"><i class="fa fa-table"></i>online Questions </a></li>
                                      		<li><a href="exam_time.php"><i class="fa fa-table"></i>online Exam </a></li>----->
   					
                                <li class="dropdown megamenu-fw">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Megamenu</a>
                                    <ul class="dropdown-menu megamenu-content" role="menu">
                                        <li>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu One</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                        <li><a href="web_setting"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a></li>
                                                        <li><a href="demo_video"><i class="fa fa-laptop" aria-hidden="true"></i>Demo</a></li>
                                                        <li><a href="search"><i class="fa fa-search" aria-hidden="true"></i>Search</a></li>
                                                        <li><a href="add_instruction"><i class="fa fa-info-circle" aria-hidden="true"></i>Instruction</a></li>
                                                        <li><a href="free_access"><i class="fa fa-universal-access" aria-hidden="true"></i>Free Acccess</a></li>
                                                        <li><a href="papular_video"><i class="fa fa-video-camera" aria-hidden="true"></i>Popular Video</a></li>
                                                        <li><a href="send_document_pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Send Document PDF</a></li>
                                                        <li><a href="city"><i class="fa fa-tablet"></i>District</a></li>
                                                        <li><a href="block"><i class="fa fa-th-large" aria-hidden="true"></i>Block</a></li>
                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu Two</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="academic"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Academic Year</a></li>
                                                            <li><a href="academuc_user_list"><i class="fa fa-list-ul" aria-hidden="true"></i>Session According Payment List Student</a></li>
                                                            <li><a href="add_user"><i class="fa fa-user-plus" aria-hidden="true"></i>Add User</a></li>
                                                            <li><a href="add_agent"><i class="fa fa-users" aria-hidden="true"></i>Executive Supervisor
</a></li>
                                                            <li><a href="sub_agent"><i class="fa fa-users" aria-hidden="true"></i>Block Supervisor</a></li>
                                                            <li><a href="referal_agent"><i class="fa fa-users" aria-hidden="true"></i>Relationship Manager</a></li>
                                                            <li><a href="add_class"><i class="fa fa-table"></i>Class</a></li>
                                                            <li><a href="price"><i class="fa fa-inr" aria-hidden="true"></i>Add Price Plan</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu Three</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                
                                                            <li><a href="chapter"><i class="fa fa-table"></i>Chapter</a></li>
                                                            <li><a href="add_subject"><i class="fa fa-table"></i>Subject</a></li>
                                                            <li><a href="add_topic"><i class="fa fa-paragraph" aria-hidden="true"></i>Add Topic</a></li>
                                                            <li><a href="question_answer"><i class="fa fa-question" aria-hidden="true"></i>Question And Answer</a></li>
                                                            <li><a href="multipal_question"><i class="ti-layout-width-default"></i> Multipal Question And Answer</a></li>
                                                            <li><a href="question_tru_false"><i class="ti-close"></i>True False Question</a></li>
                                                             <li><a href="category"><i class="fa fa-table"></i>Category</a></li>
                                      
                                                                                                                  </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu Four</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <!--<li><a href="icons_bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
                                                            <li><a href="icons_fontawesome.html"><i class="fa fa-fort-awesome"></i>Fontawesome Icon</a></li>
                                                            <li><a href="icons_flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
                                                            <li><a href="icons_material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
                                                            <li><a href="icons_weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
                                                            
                                                            <li><a href="icons_line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
                                                            <li><a href="icons_pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
                                                            <li><a href="icon_socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>-->
                                                           <li><a href="add_shopping_product"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add Product</a></li>

                                                            <li><a href="postal_charge"><i class="fa fa-inr" aria-hidden="true"></i>Delivery Charges</a></li>
                                                             <li><a href="order_list"><i class="fa fa-list" aria-hidden="true"></i>Order List</a></li>
                                                             <li><a href="coupan"><i class="fa fa-tags" aria-hidden="true"></i>Coupan</a></li>

                                                            <li><a href="agent_report"><i class="fa fa-key"></i>Agent Report</a></li>
                                                            <li><a href="sub_agent_report"><i class="fa fa-key"></i>Sub Agent Report</a></li>
                                                        <li><a href="user_payment_conform_list"><i class="fa fa-key"></i>User Report</a></li>
                                                        <li><a href="relasedcoupan"><i class="fa fa-tags" aria-hidden="true"></i>Relased Coupan</a></li>
                                                          <li><a href="pro_user_list.php"><i class="fa fa-table"></i>PRO List</a></li>
                                                             <li><a href="withdrawal_list.php"><i class="fa fa-table"></i>PRO Payment</a></li>

                                                
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu Four</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                 <li><a href="asign_user_list"><i class="fa fa-tags" aria-hidden="true"></i>Assigend Coupan</a></li>

                                                 <li><a href="latest_update"><i class="fa fa-refresh" aria-hidden="true"></i>Latest Update</a></li>
                                             <li><a href="latest_update_list"><i class="fa fa-list" aria-hidden="true"></i>Latest Update List</a></li>
                                        <li><a href="ask_me"><i class="fa fa-question-circle-o" aria-hidden="true"></i>Ask Me</a></li>
                                           <li><a href="replay_user_list"><i class="fa fa-reply" aria-hidden="true"></i>Replay List</a></li>
                                        <li><a href="contactus"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contant Us</a></li>
                                        <li><a href="result_list"><i class="fa fa-th-list" aria-hidden="true"></i>Result List</a></li>
                                        <li><a href="freeaccess_offer"><i class="fa fa-th-list" aria-hidden="true"></i>Free Access Offer</a></li>
                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <!--<h6 class="title">Title Menu Four</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="demo_subject"><i class="fa fa-file-text-o"></i>Demo Subject</a></li>
                                                            <li><a href="demo_subject_list"><i class="fa fa-hourglass-o"></i>Demo Subject List</a></li>
                                                            <li><a href="demo_chapter"><i class="fa fa-hourglass-end"></i>Demo Chapter</a></li>
                                                            <li><a href="demo_chapter_list"><i class="fa fa-list-ul" aria-hidden="true"></i>Demo Chapter List</a></li>
                                                          
                                                            
                                        <li><a href="demo_topic"><i class="fa fa-paragraph" aria-hidden="true"></i> Demo Topic</a></li>
                                           <li><a href="demo_question_answer"><i class="fa fa-question" aria-hidden="true"></i>Demo Question Answer</a></li>
                                                         <li><a href="demo_multiple_question"><i class="fa fa-question" aria-hidden="true"></i>Demo Multiple Question</a></li>
                                           <li><a href="qtf"><i class="ti-close"></i>Demo True False</a></li>
                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                            </div>
                                        </div>
                                            <!-- end row -->
                                        </li>
                                    </ul>
                                </li>
                                 <!--<li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layers"></i>Ask</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="ask_me"><i class="fa fa-key"></i>Ask Me</a></li>
                                           <li><a href="replay_user_list"><i class="fa fa-key"></i>Replay List</a></li>
                                        <li><a href="contactus"><i class="fa fa-key"></i>Contant Us</a></li>
                                            <!--<li><a href="report_user_list"><i class="fa fa-key"></i>User Report</a></li>
                                        
                                        
                                    </ul>
                                </li>-->
                                
                                <!-- <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layers"></i>More</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="free_access"><i class="fa fa-key"></i>Free Acccess</a></li>
                                         <li><a href="send_document_pdf"><i class="fa fa-key"></i>Send Document PDF</a></li>
                                        
                                    </ul>
                                </li>-->
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layers"></i>Parent</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="parent_papular_video"><i class="fa fa-key"></i>Papular Video</a></li>
                                        <!--   <li><a href="replay_user_list.php"><i class="fa fa-key"></i>Replay List</a></li>
                                        <li><a href="contactus.php"><i class="fa fa-key"></i>Contant Us</a></li>
                                         <li><a href="report_user_list.php"><i class="fa fa-key"></i>User Report</a></li>-->
                                        
                                        
                                    </ul>
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layers"></i>Royality Program</a>
                                    <ul class="dropdown-menu">
                                <li><a href="royal_add.php"><i class="fa fa-key"></i>Add Royality level</a></li>

                                        <li><a href="royality.php"><i class="fa fa-key"></i>Add Royality Program</a></li>
           <!--<li><a href="royality_report.php"><i class="fa fa-key"></i> Royality Program Report</a></li>--->
             <li><a href="royalty_program_report.php"><i class="fa fa-key"></i> Royality Program Report</a></li>
           
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="" class="close-side"><i class="ti-close"></i></a>
                        <h3 class="sidebar-heading">Activity</h3>
                        <div class="rad-activity-body">
                            <div class="rad-list-group group">
                                <a href="" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-red pull-left"><i class="fa fa-phone"></i></div>
                                    <div class="rad-list-content"><strong>Client meeting</strong>
                                        <div class="md-text">Meeting at 10:00 AM</div>
                                    </div>
                                </a>
                                <a href="" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-yellow pull-left"><i class="fa fa-refresh"></i></div>
                                    <div class="rad-list-content"><strong>Created ticket</strong>
                                        <div class="md-text">Ticket assigned to Dev team</div>
                                    </div>
                                </a>
                                <a href="" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-primary pull-left"><i class="fa fa-check"></i></div>
                                    <div class="rad-list-content"><strong>Activity completed</strong>
                                        <div class="md-text">Completed the dashboard html</div>
                                    </div>
                                </a>
                                <a href="" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-green pull-left"><i class="fa fa-envelope"></i></div>
                                    <div class="rad-list-content"><strong>New Invitation</strong>
                                        <div class="md-text">Max has invited you to join Inbox</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /.sidebar-menu -->
                        <h3 class="sidebar-heading">Tasks Progress</h3>
                        <ul class="sidebar-menu">
                            <li>
                                <a href="">
                                    <h4 class="subheading">
                                        Task one
                                        <span class="label label-danger pull-right">40%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 40%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4 class="subheading">
                                        Task two
                                        <span class="label label-success pull-right">20%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 20%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4 class="subheading">
                                        Task Three
                                        <span class="label label-warning pull-right">60%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 60%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4 class="subheading">
                                        Task four
                                        <span class="label label-primary pull-right">80%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" style="width: 80%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- End Side Menu -->
                </nav> <!-- /. main navigation -->
                <div class="clearfix"></div>
            </header> <!-- /. main header -->
    