
<!-- prs upcomung Slider Start -->

<div class="prs_upcom_slider_main_wrapper">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="prs_heading_section_wrapper">

</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="prs_upcome_tabs_wrapper">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Top Videos</a>
</li>
<li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">Top Creators 5</a>
</li>
<li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">Top Groups</a>
</li>

</ul>
</div>
</div>

 <?php
     

     foreach($video as $value)
     {
 ?>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 prs_upcom_slide_second">
<div class="prs_upcom_movie_box_wrapper">
	<div class="prs_upcom_movie_img_box">
		<img src="<?php echo base_url('admin/upload/').$value['thumbnail'] ?>" alt="movie_img" />
		<div class="prs_upcom_movie_img_overlay"></div>
		<div class="prs_upcom_movie_img_btn_wrapper">
			
		</div>
	</div>
	<div class="prs_upcom_movie_content_box">
		<div class="prs_upcom_movie_content_box_inner">
			<h1 style="font-size:25px;color:#fff;"><?php echo $value['title'];?><a href="#"></a></h1>
			<button type="button" class="btn btn-outline-primary tagbtn">#</button>
            <button type="button" class="btn btn-outline-secondary tagbtn">@</button>
            <a href="#"><p>By:</p></a>
            <a href="#"><p>0  views</p></a>
            <a href="#"><p>10/2/2020</p></a>	
		</div>
		<div class="prs_upcom_movie_content_box_inner_icon">
			
			<div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle iconbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-ellipsis-v" aria-hidden="true" style="font-size:24px;"></i>
            
              </button>
              <div class="dropdown-menu  dropmenuset" aria-labelledby="dropdownMenuButton">
                <ul>
                <li class="dropmenutext">
                <a class="dropdown-item" href="#">Report</a>
                </li>
                <li class="dropmenutext">
                <a class="dropdown-item" href="#">Wishlist</a>
                </li>
                <li class="dropmenutext">
                <a class="dropdown-item" href="#">Playlist</a>
                </li>
                </ul>
              </div>
            </div>																												
		</div>
	</div>
</div>
</div>

 <?php 
   } 
   ?>

										                             
</div>
</div>
</div>
</div>

<!-- prs upcomung Slider End -->


