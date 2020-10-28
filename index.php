
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
     <?php
     include("header.php");
	 include("model/DB.php");
	 $photo =  DB::query('SELECT * FROM uploads ORDER BY id DESC', array());
	 $photo1 =  DB::query('SELECT * FROM uploads ORDER BY id DESC', array());
	 $photo2 =  DB::query('SELECT * FROM uploads ORDER BY id DESC', array());
	 $photo3 =  DB::query('SELECT * FROM uploads ORDER BY id DESC', array());
	 
     ?>
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div >
							<img src="<?php echo "admin/image/".$photo[0]['image']?>"  class="banner-top">
							<div class="banner-inner">
								<div class="banner-info_w3_agile">
									<h3><?php echo  "$".$photo[0]['price']; ?></h3>
									<p>For Sale Price</p>
									<h6>Available Right Now</h6>
									<a href="single.php?postid=<?php echo $photo[0]['id']; ?>">Read More <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</div>
								<h5 class="coming">Coming soon to a closing near you!</h5>
							</div>
						</div>
					</li>
					<li>
						<div >
						<img src="<?php echo "admin/image/".$photo1[1]['image']?>"  class="banner-top1">
							<div class="banner-inner">
								<div class="banner-info_w3_agile">
									<h3><?php echo  "$".$photo1[1]['price']; ?></h3>
									<p>For Rent Price</p>
									<h6>Available Right Now</h6>
									<a href="single.php?postid=<?php echo $photo[1]['id']; ?>">Read More <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</div>
								<h5 class="coming">Own the home meant for you</h5>
							</div>
						</div>
					</li>
					<li>
						<div>
						<img src="<?php echo "admin/image/".$photo2[2]['image']?>"  class="banner-top2">
							<div class="banner-inner">
								<div class="banner-info_w3_agile">
									<h3><?php echo  "$".$photo2[2]['price']; ?></h3>
									<p>For Sale Price</p>
									<h6>Available Right Now</h6>
									<a href="single.php?postid=<?php echo $photo[2]['id']; ?>">Read More <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</div>
								<h5 class="coming">Coming soon to a closing near you!</h5>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top3">
						<img src="<?php echo "admin/image/".$photo3[3]['image']?>"  class="banner-top3">
						<div class="banner-inner">
								<div class="banner-info_w3_agile">
									<h3><?php echo  "$".$photo3[3]['price']; ?></h3>
									<p>For Rent Price</p>
									<h6>Available Right Now</h6>
									<a href="single.php?postid=<?php echo $photo[0]['id']; ?>">Read More <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								</div>
								<h5 class="coming">Own the home meant for you</h5>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//Slider-->
	</div>
    <br><br><div onload = 'javascript: $(this).css("float", "center")'><button onclick='javascript: location.replace("properties.php?item=10&page=1")' class="next_button"> show more properties</button></div>
	<!-- /about -->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle">AB HOMES</h3>
			<div class="inner_sec_info_w3ls_agile">
				<div class="help_full">
					<div class="col-md-6 banner_bottom_left">
						<h4>Lets learn a little bit more about <span>us</span></h4>
						<p>we know that when it comes to finding a good residence , everything about the house is very important. That's the reason we go beyond normal home listings, by looking for insights straight,
						 to give people a deeper understanding of what living in a home and neighborhood is really like. We're committed to helping you discover a place where you will love to live and
						 where you will feel more connected to the community and to each other. It's why we strive every day to help build a more friendly neighborhood.</p>
						<p>work with us today 
							</p>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 banner_bottom_grid help">
						<img src="images/ab_h.jpg" alt=" " class="img-responsive">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="news-main">
				<div class="col-md-6 news-left">
					
					<div class="col-md-6 b_right">
						<img src="images/ab1.jpg" alt=" " class="img-responsive">

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 news-right">
					<h4>Take a quick look</h4>
					<p class="sub_p">At where we started from it's a big dream come true
					</p>
					<p>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about -->
	
	<!--/tab_section-->
	<div class="tabs_section">
		<div class="container">
			<!---728x90--->
			<h3 class="tittle">Featured Properties</h3>
			<div class="inner_sec_info_w3ls_agile">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>HOUSE</li>
						<li>SHOP</li>
						<li>LAND</li>
					</ul>
					<?php
					$house =  DB::query('SELECT * FROM uploads WHERE type = :house ',array(':house' => "house"));
					?>
					<div class="resp-tabs-container">

						<div class="tab1">
							<div class="tab_info">
								<div class="col-md-6 rep-img">
									<img src="<?php echo "admin/image/".$house[0]['image']; ?>" alt=" " class="img-responsive">
								</div>
								<div class="col-md-6 rep-text">
									<h4><?php echo $house[0]['description']; ?></h4>
									<p> <?php echo $house[0]['about']; ?> </p>
									<div class="service_text">
									<h5><?php echo "$".$house[0]['price']; ?></h5>
										<h3>Big Luxury House For Sale</h3>
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<?php
					$shop =  DB::query('SELECT * FROM uploads WHERE type = :shop',array(':shop' => "shop"));
					?>
						<div class="tab2">
							<div class="tab_info">
								<div class="col-md-6 rep-text">
									<h4><?php echo $shop[0]['description']; ?></h4>
									<p> <?php echo $shop[0]['about']; ?></p>
									<div class="service_text">
										<h3>SHOP Buildings for rent</h3>
										<h5><?php echo $shop[0]['price']; ?></h5>
										<h4 class="service2">Reality Agency</h4>
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
								<div class="col-md-6 rep-img">
									<img src="<?php echo "admin/image/".$shop[0]['image']; ?>" alt=" " class="img-responsive">
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<?php
					       $land =  DB::query('SELECT * FROM uploads WHERE type = :land',array(':land' => "land"));
					    ?>
						<div class="tab3">
							<div class="tab_info">
								<div class="col-md-6 rep-img">
									<img src="<?php echo "admin/image/".$land[0]['image']; ?>" alt=" " class="img-responsive">
								</div>
								<div class="col-md-6 rep-text">
									<h4><?php echo $land[0]['description']; ?></h4>
									<p> <?php echo $land[0]['about']; ?></p>
									<div class="service_text">
										<h3>Land properties For Sale</h3>
										<h5><?php echo $land[0]['price']; ?></h5>
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>(6121)</li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<?php
					       $hospitals =  DB::query('SELECT * FROM uploads WHERE type = :hospital AND id = :id ',array(':hospital' => "hospital" ,  ":id"=>rand(1 , 2)));
					    ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /tabs -->
	<!--//tab_section-->

	<!-- /Properties -->
	<div class="mid_slider">
		<div class="mid_slider_info">
			<h3 class="tittle">Latest Properties</h3>
			<div class="inner_sec_info_w3ls_agile">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1" class=""></li>
						<li data-target="#myCarousel" data-slide-to="2" class=""></li>
						<li data-target="#myCarousel" data-slide-to="3" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/b4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/p4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="fa fa-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="fa fa-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					<!-- The Modal -->
				</div>
			</div>
		</div>
	</div>
	<!-- //Properties -->
	<!-- /stats -->
	<div class="stats_test" style="float: center;">
		<!---728x90--->
		<?php
			$list =  DB::query('SELECT * FROM uploads WHERE availability = 1 ',array(':list'=> 1));
			$list_count = count($list);
		?>
		<h3 class="tittle two">Our Stats</h3>
		<div class="inner_sec_info_w3ls_agile">
			<div class="stats">
				<div class="stats_left counter_grid">
					<i class="fa fa-building-o" aria-hidden="true"></i>
					<p class="counter"><?php echo $list_count; ?></p>
					<h4>Properties Submitted</h4>
				</div>
				<?php
			     $agents =  DB::query('SELECT * FROM agent ',array());
			     $agent_count = count($list);
		       ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- //stats -->

	<!-- /testimonials-->
	<div class="testimonials">
		<section id="carousel">
			<div class="testimonials_inner">
				<div class="col-md-8 col-md-offset-2">
					<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
					<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#fade-quote-carousel" data-slide-to="0"></li>
							<li data-target="#fade-quote-carousel" data-slide-to="1" class="active"></li>
							<li data-target="#fade-quote-carousel" data-slide-to="2"></li>
						</ol>
						<!-- Carousel items -->
						<?php
						$agent1 = DB::query('SELECT * FROM agent', array());
						$agent2 = DB::query('SELECT * FROM agent ', array());
						$agent3 = DB::query('SELECT * FROM agent ', array());
						?>
						<div class="carousel-inner">
							<div class="item">
								<div class="profile-circle"><img src="<?php echo "admin/image/".$agent1[1]['image']; ?>" alt=" "></div>
								<h4><?php
								 echo $agent1[1]['name'];
								?></h4>
								<blockquote>
									<p class="test"><?php echo $agent1[1]['description'];?></p>
								</blockquote>
							</div>
							<div class="item">
								<div class="profile-circle"><img src="<?php echo "admin/image/".$agent2[0]['image']; ?>" alt=" "></div>
								<h4><?php
								 echo $agent2[0]['name'];
								?></h4>
								<blockquote>
								<p class="test"><?php echo $agent2[0]['description'];?></p>
								</blockquote>
							</div>
							<div class="active item">
								<div class="profile-circle"><img src="<?php echo "admin/image/".$agent3[2]['image']; ?>" alt=" "></div>
								<h4><?php
								 echo $agent3[2]['name'];
								?></h4>
								<blockquote>
									<p class="test"><p class="test"><?php echo $agent3[2]['description'];?></p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
	</div>

	<!-- //testimonials-->
<?php
include("footer.php");
?>
</html>