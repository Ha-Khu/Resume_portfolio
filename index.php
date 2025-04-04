<?php 
	include 'partials/header.php';
	include '_inc/functions.php';

	$formData = null;

	if($_SERVER["REQUEST_METHOD"] === "POST") {
		$formData = nacitanieFormulara();
	}
?>
<!-- START HOME -->
	<section id="home" class="templatemo-home">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<h1 class="tm-home-title"><strong>John White</strong></h1>
					<h2 class="tm-home-subtitle">Creative Director</h2>
					<p>I am a professional <strong>UX Designer</strong> and <strong>Front-End Developer</strong> creating modern and responsive designs for <strong>Web</strong> and <strong>Mobile</strong>. Let us work together. Thank you.</p>
					<a href="#work" class="btn btn-default smoothScroll tm-view-more-btn">Let's Begin</a>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
	<!-- END HOME -->

	<!-- START work -->
	<section id="work" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-11">
					<h2 class="title">My <strong>Work</strong></h2>						
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="work-wrapper">
						<i class="fa fa-link"></i>
						<h3 class="text-uppercase tm-work-h3">Mobile UX</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="work-wrapper">
						<i class="fa fa-flash"></i>
						<h3 class="text-uppercase tm-work-h3">Web Design</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="work-wrapper">
						<i class="fa fa-dashboard"></i>
						<h3 class="text-uppercase tm-work-h3">HTML Templates</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END work -->

	<!-- START PORTFOLIO -->
	<section id="portfolio" class="tm-portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounce">
					<div class="title">
						<h2 class="tm-portfolio-title">My <strong>Portfolio</strong></h2>
					</div>

					<!-- START ISO SECTION -->
					<div class="iso-section">
						<ul class="filter-wrapper clearfix">
							<li><a href="#" class="opc-main-bg selected" data-filter="*">All</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".html">HTML</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".wordpress">Wordpress</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".mobile">Mobile</a></li>
						</ul>
						<div class="iso-box-section">
							<div class="iso-box-wrapper col4-iso-box">
								<div class="iso-box html photoshop wordpress mobile col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img1.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
								<div class="iso-box html wordpress mobile col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img2.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
								<div class="iso-box wordpress col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img3.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
								<div class="iso-box html mobile col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img4.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
								<div class="iso-box wordpress col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img5.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
								<div class="iso-box html photoshop col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img6.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
								<div class="iso-box photoshop col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img7.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
								<div class="iso-box wordpress col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img8.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">UX Design</h3>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PORTFOLIO -->

	<!-- START RESUME -->
	<section id="resume" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">					
					<h2 class="title">My <strong>Profile</strong></h2>
					<p><span class="tm-info-label">Name</span> John White</p>
					<p><span class="tm-info-label">Birthday</span> December 24, 1996</p>
					<p><span class="tm-info-label">Address</span> Melbourne Victoria 3000 Australia</p>
					<p><span class="tm-info-label">Phone</span> +001 020 0340 | 009 080 0760</p>
					<p><span class="tm-info-label">Email</span> hello@company.com</p>
					<p><span class="tm-info-label">Website</span> <a href="#" class="tm-red-text">www.company.com</a></p>
				</div>
				<div class="col-md-6 col-sm-6">
					<h2 class="title"><strong>Some</strong> Skills</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
					<h4 class="tm-progress-label">Bootstrap <small class="progress-percent-small">100%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
					</div>
					<h4 class="tm-progress-label">HTML5 <small class="progress-percent-small">90%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
					<h4 class="tm-progress-label">SEO <small class="progress-percent-small">80%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END RESUME -->

	<!-- START ABOUT -->
	<section id="about" class="tm-about">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-7">
					<div class="title">
						<h2>This is <strong>me</strong></h2>
						<h1 class="tm-red-text">Creative <strong>Director</strong></h1>
					</div>
					<p>This is free Bootstrap v3.3.4 mobile friendly layout from <a rel="nofollow" href="https://templatemo.com">templatemo</a>. Feel free to use it for your website. Credit goes to <a rel="nofollow" href="https://pixabay.com">Pixabay</a> for photos used in this template. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END ABOUT -->

	<!-- START SOCIAL -->
	<section id="social" class="tm-social">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.3s">
					<div class="media facebook">
						<a href="#">
							<div class="media-object pull-left">
								<i class="fa fa-facebook"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading tm-social-title">Follow me on</h4>
								<h3>Social Facebook</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.6s">
					<div class="media twitter">
						<a href="#">
							<div class="media-object pull-left">
								<i class="fa fa-twitter"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading tm-social-title">Tweet me on</h4>
								<h3>Social Twitter</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.9s">
					<div class="media pinterest">
						<a href="#">
							<div class="media-object pull-left">
								<i class="fa fa-pinterest"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading tm-social-title">Pin me on</h4>
								<h3>Social Pinterest</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SOCIAL -->

	<!-- START CONTACT -->
	 <?php
		include 'partials/footer.php';
	 ?>
	<!-- END CONTACT -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>