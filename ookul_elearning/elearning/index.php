<?php include"header.php"; ?>
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
						<?php $blog=$obj->fetchAllDetail("chapter");
			  if($blog) {
				  $i=0;
				  while($blog1=mysqli_fetch_assoc($blog))
				  { $i++;
					  ?> 
							
							<li role="presentation" <?php if($i==1){ ?> class="active" <?php } ?> ><a href="#best<?php echo $i; ?>" aria-controls="best<?php echo $i; ?>" role="tab" data-toggle="tab"><?php echo $blog1['chapter'] ?></a>
							</li>
			  <?php }} ?>
							
							
						</ul>
					</div>
				</div>
				<div class="tab-content">
				<?php $blog=$obj->fetchAllDetail("chapter");
			  if($blog) {
				  $i=0;
				  while($blog1=mysqli_fetch_assoc($blog))
				  { $i++;
					  ?> 
					<div role="tabpanel" class="tab-pane fade in <?php if($i==1){ ?> active <?php } ?>" id="best<?php echo $i; ?>">
						<div class="prs_upcom_slider_slides_wrapper">
							<div class="owl-carousel owl-theme">
								<div class="item">
									<div class="row">
									<?php $blog789=$obj->fetchDetailById($blog1['id'],"topic_wise_video","chapter");
			  if($blog789) {
				
				  while($blog178=mysqli_fetch_assoc($blog789))
				  { 
					  ?> 
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 prs_upcom_slide_first">
											<div class="prs_upcom_movie_box_wrapper">
												<div class="prs_upcom_movie_img_box">
													<img src="admin/uplaod/<?php echo $blog178['thaminal1']; ?>" />
													<div class="prs_upcom_movie_img_overlay"></div>
													<div class="prs_upcom_movie_img_btn_wrapper">
														<ul>
															<li><a href="#">View Trailer</a>
															</li>
															<li><a href="#">View Details</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="prs_upcom_movie_content_box">
													<div class="prs_upcom_movie_content_box_inner">
														<h2><a href="#"> </a></h2>
														<p> </p>	<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</div>
													<div class="prs_upcom_movie_content_box_inner_icon">
														<ul>
															<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
			  <?php }} ?>
										</div>
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="prs_animate_btn1 prs_upcom_main_wrapper">
									<ul>
										<li><a href="#" class="button button--tamaya prs_upcom_main_btn" data-text="view all"><span>View All</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
			  <?php }} ?>
					</div>
			</div>
		</div>
	</div>
	<div class="prs_ln_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_heading_section_wrapper">
						<h2>LAtest News</h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="prs_ln_left_img_wrapper">
						<div class="prs_in_left_img_overlay"></div>
						<div class="prs_webseri_video_sec_icon_wrapper ">
							<ul>
								<li><a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
								</li>
							</ul>
						</div>
						<div class="prs_prs_webseri_video_sec_icon_cont_wrapper">
							<p>28 Feb 2018</p>
							<h2>The News of theater</h2>
							<ul>
								<li><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;<a href="#">120 Like</a>
								</li>
								<li><i class="fa fa-comments-o"></i>&nbsp;&nbsp;<a href="#">52 Comments</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="prs_ln_right_main_wrapper">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="prs_ln_right_first_box_wrapper">
									<div class="prs_in_right_box_img_wrapper">
										<img src="images/content/nl2.jpg" alt="news_img" />
									</div>
									<div class="prs_in_right_box_img_cont_wrapper">
										<h2><a href="#">The News of theater</a></h2>
										<h3>28 feb 2018</h3>
										<p>Lorem ipsum dolor sit amet, consectuir adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
										<ul>
											<li><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;<a href="#">120 Like</a>
											</li>
											<li><i class="fa fa-comments-o"></i>&nbsp;&nbsp;<a href="#">52 comments</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="prs_ln_right_first_box_wrapper2">
									<div class="prs_in_right_box_img_wrapper">
										<img src="images/content/nl3.jpg" alt="news_img" />
									</div>
									<div class="prs_in_right_box_img_cont_wrapper">
										<h2><a href="#">The News of theater</a></h2>
										<h3>28 feb 2018</h3>
										<p>Lorem ipsum dolor sit amet, consectuir adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
										<ul>
											<li><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;<a href="#">120 Like</a>
											</li>
											<li><i class="fa fa-comments-o"></i>&nbsp;&nbsp;<a href="#">52 comments</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="prs_feature_slider_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_heading_section_wrapper">
						<h2>FEATURED EVENTS</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_feature_slider_wrapper">
						<div class="owl-carousel owl-theme">
							<div class="item prs_feature_slider_item_wrapper">
								<div class="prs_feature_img_box_wrapper">
									<div class="prs_feature_img">
										<img src="images/content/ft1.jpg" alt="feature_img">
										<div class="prs_ft_btn_wrapper">
											<ul>
												<li><a href="#">Book Now</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="prs_feature_img_cont">
										<h2><a href="#">Music Event in india</a></h2>
										<div class="prs_ft_small_cont_left">
											<p>Mumbai & Pune</p>
										</div>
										<div class="prs_ft_small_cont_right">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<ul>
											<li>June 07 - july 08</li>
											<li>08:00-12:00 pm</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="item prs_feature_slider_item_wrapper">
								<div class="prs_feature_img_box_wrapper">
									<div class="prs_feature_img">
										<img src="images/content/ft2.jpg" alt="feature_img">
										<div class="prs_ft_btn_wrapper">
											<ul>
												<li><a href="#">Book Now</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="prs_feature_img_cont">
										<h2><a href="#">Music Event in india</a></h2>
										<div class="prs_ft_small_cont_left">
											<p>Mumbai & Pune</p>
										</div>
										<div class="prs_ft_small_cont_right">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<ul>
											<li>June 07 - july 08</li>
											<li>08:00-12:00 pm</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="item prs_feature_slider_item_wrapper">
								<div class="prs_feature_img_box_wrapper">
									<div class="prs_feature_img">
										<img src="images/content/ft3.jpg" alt="feature_img">
										<div class="prs_ft_btn_wrapper">
											<ul>
												<li><a href="#">Book Now</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="prs_feature_img_cont">
										<h2><a href="#">Music Event in india</a></h2>
										<div class="prs_ft_small_cont_left">
											<p>Mumbai & Pune</p>
										</div>
										<div class="prs_ft_small_cont_right">	<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<ul>
											<li>June 07 - july 08</li>
											<li>08:00-12:00 pm</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="prs_patner_main_section_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_heading_section_wrapper">
						<h2>Our Patner’s</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_pn_slider_wraper">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="images/content/p1.jpg" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="images/content/p2.jpg" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="images/content/p3.jpg" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="images/content/p4.jpg" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="images/content/p5.jpg" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="images/content/p6.jpg" alt="patner_img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="prs_newsletter_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="prs_newsletter_text">
						<h3>Get update sign up now !</h3>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="prs_newsletter_field">
						<input type="text" placeholder="Enter Your Email">
						<button type="submit">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include"footer.php"; ?>