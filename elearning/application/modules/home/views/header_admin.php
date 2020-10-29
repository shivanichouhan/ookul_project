<style>

input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
resize: vertical;
}

label {
padding: 12px 12px 12px 0;
display: inline-block;
}

input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: right;
}

input[type=submit]:hover {
background-color: #45a049;
}

.container {
width: 1000px;

}

.col-25 {
float: left;
width: 25%;
margin-top: 6px;
}

.col-75 {
float: left;
width: 75%;
margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}
.box1{
width: 100%;
float: left;  
}
.imagebox{
width:100%;
display:inline-block;
text-align:center;
}
.image_upload {

width: 30%;
margin: 0 auto;
text-align: -webkit-center;
padding: 17px 0;
}

.sidebar {
height: 100%;
width:20%;
float: left;
z-index: 1;
top: 0;
left: 0;
background-color: #90ee90;
overflow-x: hidden;
padding-top: 16px;
}

.sidebar a {
padding: 25px 8px 25px 16px;
text-decoration: none;
font-size: 20px;
color: #1b1b1b;
display: block;
}

.sidebar a:hover {
color: #f1f1f1;
padding: 12px;

}

.mainsidebar {
width: 80%;
float: left;

}
</style>
<html lang="zxx">
<head>
<meta charset="utf-8" />
<title>Legends of Tomorrow</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Movie Pro" />
<meta name="keywords" content="Movie Pro" />
<meta name="author" content="" />
<meta name="MobileOptimized" content="320" />
<!--Template style -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/fonts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/flaticon.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/owl.theme.default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/dl-menu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/nice-select.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/magnific-popup.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/venobox.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>js/plugin/rs_slider/layers.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>js/plugin/rs_slider/navigation.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>js/plugin/rs_slider/settings.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/site/') ?>css/responsive.css" />
<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
<script src="<?php echo base_url('assets/site/') ?>js/jquery_min.js"></script>
<!-- favicon links -->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/site/') ?>images/header/favicon.ico" />
</head>

<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="<?php echo base_url('assets/site/') ?>images/header/horoscope.gif" id="preloader_image" alt="loader">
		</div>
	</div>

	<div class="prs_navigation_main_wrapper">
		<div class="container-fluid">
			<div id="search_open" class="gc_search_box">
				<input type="text" placeholder="Search here">
				<button><i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</div>
			<div class="prs_navi_left_main_wrapper">
				<div class="prs_logo_main_wrapper">
					<a href="<?php echo base_url(); ?>" style="font-size: 25px;color: #fff; font-weight: 700;">
                        <img src="<?php echo base_url('assets/site/') ?>images/content/logo_l.png" alt="logo_l" class="logo_l">
					</a>
				</div>
				<div class="prs_menu_main_wrapper">
					<nav class="navbar navbar-default">
						<div id="dl-menu" class="xv-menuwrapper responsive-menu">
							<button class="dl-trigger">
								<img src="<?php echo base_url('assets/site/') ?>images/header/bars.png" alt="bar_png">
							</button>
							<div class="prs_mobail_searchbar_wrapper" id="search_button">	<i class="fa fa-search"></i>
							</div>
							<div class="clearfix"></div>
							<ul class="dl-menu">
								
						<!-- /dl-menuwrapper -->
					</nav>
				</div>
			</div>
			<div class="prs_navi_right_main_wrapper">
				<div class="prs_slidebar_wrapper">
					<button class="second-nav-toggler" type="button">
						<img src="<?php echo base_url('assets/site/') ?>images/header/bars.png" alt="bar_png">
					</button>
				</div>
				<div class="prs_top_login_btn_wrapper">
					<div class="prs_animate_btn1">
						<ul>
							<li>

			<!-------header profile start--->

			<?php 
      
              $member= $this->session->userdata('member');
              
			if($member)
			 {
                $img = $this->common->getdata('register',array('id'=>$member['id']),array('single'));
			 ?>

            <div class="profile-header-wrap">
		        <a class="profile-avatar" href="/people/jmans">
		        <span class="profile-avatar-mask">
		          <img class="profile-avatar-image" alt="jmans" src="<?php echo base_url('/admin/upload/'.$img['picture']) ?>" width="60" height="60">
		        </span>
		       </a>
		   
		                  <!------------------header profiledropdown--->
		                  
		      <div class="dropdown">
                  <button class="btn  dropdown-toggle dp_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-caret-down dp_btn_i" aria-hidden="true"></i>

                  </button>
                      <div class="dropdown-menu menuprofie" aria-labelledby="dropdownMenuButton">
                          <ul style="padding:8px">
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('home/profile'); ?>"><i class="fa fa-home userpic" aria-hidden="true">   Your Account</i></a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('home/ebook'); ?>"><i class="fa fa-book  userpic"  aria-hidden="true">   Ebook</i></a>
                          </li> 
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('home/addvideo');?>"><i class="fa fa-video-camera  userpic" aria-hidden="true">   Add Videos</i></a>
                          </li> 
                          <li>
                            <a class="dropdown-item" href="e_productivity.html"><i class="fa fa-star  userpic" aria-hidden="true">   Productivity</i></a>
                          </li> 
                          <li>
                            <a class="dropdown-item" href="e_group.html"><i class="fa fa-users  userpic" aria-hidden="true">   Groups</i></a>
                          </li> 
                          <li>
                            <a class="dropdown-item" href="e_important_a.html"><i class="fa fa-star  userpic" aria-hidden="true">   Important</i></a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="<?php echo base_url('home/logout'); ?>"><i class="fa fa-star  userpic" aria-hidden="true">   Log Out</i></a>
                          </li> 
                           </ul>
                      </div>
                    </div>
		                  
		                   <!------------------headerprofiledropdown close--->
		                   
               <!------------------header profile close--->

                 <?php 
 					
 					 }
                  ?>
							</li>
						</ul>
					</div>
				</div>
				<!-- <div class="product-heading">
					<div class="con">
						<select>
							<option>All Categories</option>							
							<option>Courses</option>
							<option>Trending</option>
							<option>Libraries</option>
							<option>Important</option>
							<option>Goal Set</option>
							<option>Groups</option>
							<option>Test</option>
							<option>charity/investors Profile </option>
						</select>
						<input type="text" placeholder="Search  , Video" class="inputlength">
						<button type="submit"><i class="flaticon-tool"></i>
						</button>
					</div>
				</div> -->
				<span style="margin-left:12px;"> <a href="#"><i class="fa fa-bell bellicon"></i></a></span>
			</div>
			<div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
				<div class="mobail_nav_overlay"></div>
				<div class="mobile-nav-box">
					<div class="mobile-logo">
						<a href="<?php echo base_url(); ?>" class="mobile-main-logo" style="color:#fff">
						
                          <img src="<?php echo base_url('assets/site/') ?>images/content/logo_l.png" alt="logo_l" class="logo_l">
						</a>	
						<a href="#" class="manu-close"><i class="fa fa-times"></i></a>
					</div>
					<ul class="mobile-list-nav">
						<li><a href="index.html"><i class="fa fa-home" aria-hidden="true">Home</i></a>
						</li>
						<li><a href="e_trending.html"><i class="fa fa-pencil-square-o" aria-hidden="true">
						   Trending</i></a>
						</li>
						<li><a href="e_course.html"><i class="fa fa-book" aria-hidden="true">  Courses</i></a>
						</li>
						<li><a href="e_libraries.html"><i class="fa fa-book" aria-hidden="true">  Libraries</i></a>
						</li>
						<li><a href="e_Charity.html"><i class="fa fa-star" aria-hidden="true">  Charity investor</i></a>
						</li>
						<li><a href="e_Test.html"><i class="fa fa-pencil-square-o" aria-hidden="true">  Test</i></a>
						</li>
						<li><a href="e_ebook.html"><i class="fa fa-book" aria-hidden="true">  Ebook</i></a>
						</li>
						<li><a href="e_contact.html"><i class="fa fa-user" aria-hidden="true">  Contact Us</i></a>
						</li>
						<li><a href="e_important.html"><i class="fa fa-star" aria-hidden="true">  Important</i></a>
						</li>
					</ul>
					<div class="product-heading prs_slidebar_searchbar_wrapper">
						<div class="con">
							<select>
							<option>All Categories</option>							
							<option>Courses</option>
							<option>Trending</option>
							<option>Libraries</option>
							<option>Important</option>
							<option>Goal Set</option>
							<option>Groups</option>
							<option>Test</option>
							<option>charity/investors Profile </option>
						</select>
							<input type="text" placeholder="Search  , Video" class="inputlength1">
							<button type="submit"><i class="flaticon-tool"></i>
							</button>
						</div>
					</div>
					<div class="achivement-blog">
						<ul class="flat-list">
							<li>
								<a href="#">	<i class="fa fa-facebook"></i>
									<h6>Facebook</h6>
									<span class="counter">12546</span>
								</a>
							</li>
							<li>
								<a href="#">	<i class="fa fa-twitter"></i>
									<h6>Twiter</h6>
									<span class="counter">12546</span>
								</a>
							</li>
							<li>
								<a href="#">	<i class="fa fa-pinterest"></i>
									<h6>Pinterest</h6>
									<span class="counter">12546</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="prs_top_login_btn_wrapper prs_slidebar_searchbar_btn_wrapper">
						<div class="prs_animate_btn1">
							<ul>
								<li><a href="#" class="button button--tamaya" data-text="sign up" data-toggle="modal" data-target="#myModal"><span>sign up</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs navigation End -->
