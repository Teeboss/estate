	<!--footer -->
	<div class="footer_w3layouts_agileits">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 footer-grid_agileits_w3">
					<div class="footer-title">
						<h2>About Us</h2>
					</div>
					<div class="footer-text">
						<p>At AB HOMES we give you the best accomodation you could ever imagine , we are your friends here and we are here to help you find your dream home.</p>
					</div>
				</div>
				<div class="col-md-4 footer-grid_agileits_w3">
					<div class="footer-title">
						<h3>Recent Works</h3>
					</div>
					<div class="footer-list">
					<?php
					
					$posts = DB::query('SELECT * FROM uploads ORDER BY id DESC LIMIT 6', array());
					foreach ($posts as $post) {
						echo"
						<div class='flickr-grid'>
							<a href='single.php?postid=".$post['id']."'><img src='admin/image/".$post['image']."' alt='' ></a>
						</div>
						";
					}


 	
					?>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 footer-grid_agileits_w3">
					
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="copyrightbottom">
			<p>© 2020 - AB HOMES . Designed by samos tech  <a href="samos4realtech.com">samos4realtech</a></p>
		</div>
	</div>
	<!-- //copyright -->


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->


	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
