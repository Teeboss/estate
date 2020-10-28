	<!--footer -->
	<div class="footer_w3layouts_agileits">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 footer-grid_agileits_w3">
					<div class="footer-title">
						<h2>About Us</h2>
					</div>
			
				</div>
				<div class="col-md-4 footer-grid_agileits_w3">
					<div class="footer-title">
						<h3>Recent Works</h3>
					</div>
					<div class="footer-list">
						<div class="flickr-grid">
							<a href="single.html"><img src="images/p1.jpg" alt=" " ></a>
						</div>
						<div class="flickr-grid">
							<a href="#"><img src="images/p2.jpg" alt=" "></a>
						</div>
						<div class="flickr-grid">
							<a href="#"><img src="images/p3.jpg" alt=" " ></a>
						</div>
						<div class="flickr-grid">
							<a href="#"><img src="images/p4.jpg" alt=" "></a>
						</div>
						<div class="flickr-grid">
							<a href="#"><img src="images/b1.jpg" alt=" "></a>
						</div>
						<div class="flickr-grid">
							<a href="#"><img src="images/b3.jpg" alt=" "></a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-4 footer-grid_agileits_w3">
					<div class="footer-title">
						<h3>Subscribe</h3>
					</div>
					<p>Vivamus magna justo, lacinia eget consectetur sed.</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
					</form>
					<ul class="fallow">
						<li>
							<h4>Follow us on:</h4>
						</li>
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="copyrightbottom">
			<p>© 2018 Demesne. All Rights Reserved | Design By <a href="../../../../../../../external.html?link=http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	<!-- //copyright -->


	<!-- js -->
	<script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="../js/main.js"></script>
	<!--//search-bar-->
	<!-- stats -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->


	<script src="../js/responsiveslides.min.js"></script>
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
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>
	<script src="../js/form-validator.min.js"></script>
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
	<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>


</body>
