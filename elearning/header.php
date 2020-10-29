<?php 
include"include/database.php";
include"include/session.php";
$obj=new database();
//$web_info=$obj->fetchByIdTable("website_details");
?>
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
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="css/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
	<link rel="stylesheet" type="text/css" href="css/dl-menu.css" />
	<link rel="stylesheet" type="text/css" href="css/nice-select.css" />
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
	<link rel="stylesheet" type="text/css" href="css/venobox.css" />
	<link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/layers.css" />
	<link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/navigation.css" />
	<link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/settings.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
<script src='../../../google_analytics_auto.js'></script></head>

<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="images/header/horoscope.gif" id="preloader_image" alt="loader">
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
					<a href="index.php" style="font-size: 25px;color: #000; font-weight: 700;">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="46.996px" height="40px" viewBox="0 0 46.996 40" enable-background="new 0 0 46.996 40" xml:space="preserve">
<g>
	<g>
		<path  d="M39.919,19.833C39.919,8.88,30.984,0,19.959,0C8.937,0,0,8.88,0,19.833
			c0,10.954,8.937,19.834,19.959,19.834C30.984,39.666,39.919,30.787,39.919,19.833z M35.675,14.425
			c0.379,0,0.686,0.307,0.686,0.683s-0.305,0.683-0.686,0.683c-0.38,0-0.688-0.307-0.688-0.683S35.295,14.425,35.675,14.425z
			 M34.482,20.461c0,0.491-0.025,0.976-0.071,1.452l-11.214-4.512l6.396-7.733C32.592,12.311,34.482,16.167,34.482,20.461z
			 M19.083,2.277c0.379,0,0.687,0.305,0.687,0.682c0,0.378-0.306,0.684-0.687,0.684c-0.378,0-0.686-0.306-0.686-0.684
			C18.396,2.584,18.704,2.277,19.083,2.277z M19.959,6.031c1.916,0,3.743,0.372,5.416,1.042l-6.335,7.662l-6.252-6.82
			C14.906,6.718,17.351,6.031,19.959,6.031z M3.128,16.473c-0.378,0-0.687-0.306-0.687-0.684c0-0.377,0.307-0.682,0.687-0.682
			c0.38,0,0.686,0.305,0.686,0.682C3.814,16.167,3.508,16.473,3.128,16.473z M5.535,22.119c-0.063-0.545-0.098-1.098-0.098-1.658
			c0-3.612,1.339-6.911,3.547-9.444l6.502,7.095L5.535,22.119z M10.462,35.354c-0.379,0-0.687-0.306-0.687-0.683
			s0.307-0.682,0.687-0.682c0.379,0,0.687,0.305,0.687,0.682S10.842,35.354,10.462,35.354z M6.925,26.828l10.4-4.186l0.239,12.052
			C12.88,33.921,8.956,30.922,6.925,26.828z M19.513,22.326c-1.529,0-2.771-1.232-2.771-2.752c0-1.521,1.241-2.753,2.771-2.753
			c1.53,0,2.771,1.232,2.771,2.753C22.284,21.096,21.043,22.326,19.513,22.326z M29.939,33.99c-0.378,0-0.686-0.308-0.686-0.683
			c0-0.377,0.307-0.683,0.686-0.683s0.688,0.306,0.688,0.683C30.626,33.683,30.319,33.99,29.939,33.99z M22.482,34.672
			l-0.246-12.388l10.846,4.365C31.098,30.799,27.177,33.854,22.482,34.672z M35.314,34.585c-1.837,1.531-6.061,4.306-6.061,4.306
			C37.652,36.448,45.953,40,45.953,40l1.043-8.658C41.41,30.454,38.125,32.244,35.314,34.585z"/>
	</g>
</g>
</svg> 
         Legends of Tomorrow
					</a>
				</div>
				<div class="prs_menu_main_wrapper">
					<nav class="navbar navbar-default">
						<div id="dl-menu" class="xv-menuwrapper responsive-menu">
							<button class="dl-trigger">
								<img src="images/header/bars.png" alt="bar_png">
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
						<img src="images/header/bars.png" alt="bar_png">
					</button>
				</div>
				<div class="prs_top_login_btn_wrapper">
					<div class="prs_animate_btn1">
						<ul>
							<li>

								<!-------header profile start--->
<?php if(@$_SESSION['user_id']){ 
$user=$obj->fetchById(@$_SESSION['user_id'],"register","id");
?>
            <div class="profile-header-wrap">
		        <a class="profile-avatar" href="u_account.php">
		        <span class="profile-avatar-mask">
		          <img class="profile-avatar-image" alt="jmans" src="admin/upload/<?php echo $user['picture']; ?>" width="60" height="60">
		        </span>
		       </a>
		    <div class="profile-info">
		      <h1 class="artist-header-name"><a href="u_account.php"><?php echo $user['fname']; ?> <?php echo $user['lname']; ?></a></h1>
		      <h3 style="padding: 0px; color:#fff;"><?php echo $user['address']; ?></h3>
		      <div class="profile-social">
		    <div class="twitter share-twitter">
		  <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="" style="position: static; visibility: visible; width: 61px; height: 20px;" data-url="http://www.redbubble.com/people/jmans?asc=t"></iframe>
		</div>

		    <div class="facebook">

		      <div class="fb-like fb_iframe_widget" data-href="http://www.redbubble.com/people/jmans" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=237843743897&amp;container_width=0&amp;href=http%3A%2F%2Fwww.redbubble.com%2Fpeople%2Fjmans&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=200"><span style="vertical-align: bottom; width: 61px; height: 20px;"><iframe name="f17e006b88568c8" width="200px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.3/plugins/like.php?app_id=237843743897&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FP5DLcu0KGJB.js%3Fversion%3D42%23cb%3Df26bc0b6b225c68%26domain%3Dwww.redbubble.com%26origin%3Dhttp%253A%252F%252Fwww.redbubble.com%252Ff10cd6e8c9b6154%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fwww.redbubble.com%2Fpeople%2Fjmans&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=200" style="border: none; visibility: visible; width: 61px; height: 20px;" class=""></iframe></span></div>
		    </div>
		        
		      </div>
		    </div>
		  </div>
               <!------------------header profile close--->
<?php } ?>						
						</li>
						</ul>
					</div>
				</div>
				<div class="product-heading">
					<div class="con">
						<select>
							<option>All Categories</option>
							<?php $blog=$obj->fetchAllDetail("chapter");
			  if($blog) {
				  while($blog1=mysqli_fetch_assoc($blog))
				  {
					  ?> 
							<option value="<?php echo $blog1['id'] ?>"><?php echo $blog1['chapter'] ?> </option>
			  <?php }} ?>
						</select>
						<input type="text" placeholder="Search  , Video" class="inputlength">
						<button type="submit"><i class="flaticon-tool"></i>
						</button>
					</div>
				</div>
				<span style="margin-left:-10px;"> <a href="#"><i class="fa fa-bell bellicon"></i></a></span>
			</div>
			<div id="mobile-nav" data-prevent-default="true" data-mouse-events="true">
				<div class="mobail_nav_overlay"></div>
				<div class="mobile-nav-box">
					<div class="mobile-logo">
						<a href="index.php" class="mobile-main-logo">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="46.996px" height="40px" viewBox="0 0 46.996 40" enable-background="new 0 0 46.996 40" xml:space="preserve">
<g>
	<g>
		<path  d="M39.919,19.833C39.919,8.88,30.984,0,19.959,0C8.937,0,0,8.88,0,19.833
			c0,10.954,8.937,19.834,19.959,19.834C30.984,39.666,39.919,30.787,39.919,19.833z M35.675,14.425
			c0.379,0,0.686,0.307,0.686,0.683s-0.305,0.683-0.686,0.683c-0.38,0-0.688-0.307-0.688-0.683S35.295,14.425,35.675,14.425z
			 M34.482,20.461c0,0.491-0.025,0.976-0.071,1.452l-11.214-4.512l6.396-7.733C32.592,12.311,34.482,16.167,34.482,20.461z
			 M19.083,2.277c0.379,0,0.687,0.305,0.687,0.682c0,0.378-0.306,0.684-0.687,0.684c-0.378,0-0.686-0.306-0.686-0.684
			C18.396,2.584,18.704,2.277,19.083,2.277z M19.959,6.031c1.916,0,3.743,0.372,5.416,1.042l-6.335,7.662l-6.252-6.82
			C14.906,6.718,17.351,6.031,19.959,6.031z M3.128,16.473c-0.378,0-0.687-0.306-0.687-0.684c0-0.377,0.307-0.682,0.687-0.682
			c0.38,0,0.686,0.305,0.686,0.682C3.814,16.167,3.508,16.473,3.128,16.473z M5.535,22.119c-0.063-0.545-0.098-1.098-0.098-1.658
			c0-3.612,1.339-6.911,3.547-9.444l6.502,7.095L5.535,22.119z M10.462,35.354c-0.379,0-0.687-0.306-0.687-0.683
			s0.307-0.682,0.687-0.682c0.379,0,0.687,0.305,0.687,0.682S10.842,35.354,10.462,35.354z M6.925,26.828l10.4-4.186l0.239,12.052
			C12.88,33.921,8.956,30.922,6.925,26.828z M19.513,22.326c-1.529,0-2.771-1.232-2.771-2.752c0-1.521,1.241-2.753,2.771-2.753
			c1.53,0,2.771,1.232,2.771,2.753C22.284,21.096,21.043,22.326,19.513,22.326z M29.939,33.99c-0.378,0-0.686-0.308-0.686-0.683
			c0-0.377,0.307-0.683,0.686-0.683s0.688,0.306,0.688,0.683C30.626,33.683,30.319,33.99,29.939,33.99z M22.482,34.672
			l-0.246-12.388l10.846,4.365C31.098,30.799,27.177,33.854,22.482,34.672z M35.314,34.585c-1.837,1.531-6.061,4.306-6.061,4.306
			C37.652,36.448,45.953,40,45.953,40l1.043-8.658C41.41,30.454,38.125,32.244,35.314,34.585z"/>
	</g>
</g>
</svg>
              Legends of Tomorrow
						</a>	
						<a href="#" class="manu-close"><i class="fa fa-times"></i></a>
					</div>
					<ul class="mobile-list-nav">
					<li><a href="index.php"><i class="fa fa-home" aria-hidden="true">  Home</i></a>
						</li>
						<li><a href="e_trending.php"><i class="fa fa-pencil-square-o" aria-hidden="true">
						   Trending</i></a>
						</li>
						<li><a href="e_course.php"><i class="fa fa-book" aria-hidden="true">  Courses</i></a>
						</li>
						<li><a href="e_libraries.php"><i class="fa fa-book" aria-hidden="true">  Libraries</i></a>
						</li>
						<li><a href="e_Charity.html"><i class="fa fa-star" aria-hidden="true">  Charity investor</i></a>
						</li>
						<li><a href="e_Test.html"><i class="fa fa-pencil-square-o" aria-hidden="true">  Test</i></a>
						</li>
						<li><a href="e_ebook.html"><i class="fa fa-book" aria-hidden="true">  Ebook</i></a>
						</li>
						<li><a href="e_contact.php"><i class="fa fa-user" aria-hidden="true">  Contact Us</i></a>
						</li>
						<li><a href="e_important.php"><i class="fa fa-star" aria-hidden="true">  Important</i></a>
						</li>
						<?php if(@$_SESSION['user_id']){ ?>
						<li><a href="logout.php">Logout</a>
						</li>
						<?php }  ?>
					</ul>
					<div class="product-heading prs_slidebar_searchbar_wrapper">
						<div class="con">
							<select>
								<option>All Categories</option>
								<?php $blog=$obj->fetchAllDetail("chapter");
			  if($blog) {
				  while($blog1=mysqli_fetch_assoc($blog))
				  {
					  ?> 
							<option value="<?php echo $blog1['id'] ?>"><?php echo $blog1['chapter'] ?> </option>
			  <?php }} ?>
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
							<?php if(@$_SESSION['user_id']){ }else{ ?>
								<li><a href="#" class="button button--tamaya" data-text="sign up" data-toggle="modal" data-target="#myModal"><span>sign up</span></a>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs navigation End -->
	<!-- prs navigation End -->