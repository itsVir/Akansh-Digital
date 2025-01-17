<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Vitors Business HTML-5 Template | Services</title>

	<link href="../../css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link href="../../css2-1?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<!--Color Switcher Mockup-->
	<link href="css/color-switcher-design.css" rel="stylesheet">
	<!-- Color Themes -->
	<link id="theme-color-file" href="css/color-themes/default-color.css" rel="stylesheet">
	<link rel="icon" href="images/favicon2.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>
		<!-- End Preloader -->

		<!-- Cursor -->
		<div class="cursor"></div>
		<div class="cursor-follower"></div>
		<!-- Cursor End -->

		<!-- Main Header -->
		<?php include('header.php') ?>

		<!-- End Main Header -->

		<!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg" style="background-image: url(images/background/page-header-bg.jpg);"></div>
			<div class="container">
				<div class="page-header__inner">
					<h2>services</h2>
					<div class="thm-breadcrumb__box">
						<ul class="thm-breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li><span>::</span></li>
							<li>services</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->

		<!--Brand One Start-->
		<?php include('Brands-slider.php') ?>

		<!--Brand One End-->

		<!--Services Two Start-->
		<section class="services-two">
			<div class="services-two__shape-1" style="background-image: url(images/shapes/services-two-shape-1.png);">
			</div>
			<div class="container">
				<div class="services-two__inner-box">
					<div class="row">

						<div class="col-xl-5 wow fadeInLeft" data-wow-delay="100ms">
							<div class="services-two__left">
								<div class="section-title text-left">
									<div class="section-title__tagline-box">
										<span class="section-title__tagline">. : Trusted web design service : .</span>
									</div>
									<h2 class="section-title__title">Intuitive For
										Web Solution</h2>
								</div>
							</div>
						</div>

						<div class="col-xl-7">
							<div class="services-two__right">
								<ul class="services-two__list clearfix">
									<?php
									$services = [
										"seo-marketing" => "SEO Marketing",
										"digital-marketing" => "Digital Marketing",
										"content-marketing" => "Content Marketing",
										"nfc-digital-cards" => "NFC Digital Cards"
									];

									foreach ($services as $key => $title) {
										echo "
                <li class='cs-hover_tab-2 clearfix'>
                    <div class='services-two__icon'>
                        <a href='services-details.php?service=$key'><span class='icon-down-left-arrow'></span></a>
                    </div>
                    <div class='services-two__content'>
                        <h3 class='services-two__title'>
                            <a href='services-details.php?service=$key'>$title</a>
                        </h3>
                    </div>
                </li>";

									}
									?>
								</ul>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!--Services Two End-->


		<!--Why Choose One Start-->
		<section class="why-choose-one">
			<div class="why-choose-one__bg" style="background-image: url(images/background/why-choose-one-bg.jpg);">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-7">
						<div class="why-choose-one__left">
							<div class="section-title text-left">
								<div class="section-title__tagline-box">
									<span class="section-title__tagline">. : WHY CHOOSE US : .</span>
								</div>
								<h2 class="section-title__title">Make Your Service. </h2>
							</div>
							<p class="why-choose-one__text">We offer tailored creative solutions, Figma designs, and wireframing services, helping businesses drive impactful change. Our strategies focus on innovation, clarity, and user-centered design.</p>

							<div class="why-choose-one__shape-1 float-bob-y">
								<img src="images/shapes/why-choose-one-shape-1.png" alt="">
							</div>

							<div class="why-choose-one__shape-2 img-bounce">
								<img src="images/shapes/Akash-logo.png" alt="">
							</div>

							<ul class="why-choose-one__points clearfix">
								<li class="cs-hover_tab-3 active clearfix">
									<div class="icon">
										<span class="icon-creative-solution"></span>
									</div>
									<div class="content">
										<h3>1. Creative Solution</h3>
										<p>We provide innovative creative solutions tailored to your business needs, enhancing brand impact and audience engagement effectively.</p>
									</div>
									<div class="why-choose-one__img-box" data-src="images/resource/why-choose-one-img.jpg">
									</div>
								</li>
								<li class="cs-hover_tab-3 clearfix">
									<div class="icon">
										<span class="icon-figma-design"></span>
									</div>
									<div class="content">
										<h3>2. Figma Design</h3>
										<p>Our Figma design services deliver intuitive, high-quality designs that are visually appealing and user-friendly, ensuring seamless user experiences across all platforms.</p>
									</div>
									<div class="why-choose-one__img-box" data-src="images/resource/why-choose-one-img-2.jpg"></div>
								</li>
								<li class="cs-hover_tab-3 clearfix">
									<div class="icon">
										<span class="icon-wireframing"></span>
									</div>
									<div class="content">
										<h3>3. Wireframing</h3>
										<p>Our wireframing services create clear, structured layouts that define the user interface, ensuring efficient navigation and a seamless design process for your website or application.</p>
									</div>
									<div class="why-choose-one__img-box" data-src="images/resource/why-choose-one-img.jpg"></div>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!--Why Choose One End-->



		<!-- Faq One Start -->
		<section class="faq-one">
			<div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="faq-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
							<div class="faq-one__content-box">
								<div class="faq-one__curved-circle">
									<div class="curved-circle-3">
										Some Veiled questions
									</div><!-- /.curved-circle -->
									<div class="faq-one__circle-box"></div>
									<div class="faq-one__img">
										<img src="images/resource/faq-one-img.jpg" alt="">
									</div>
								</div><!-- /.curved-circle -->
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="faq-one__right">
							<div class="section-title text-left">
								<div class="section-title__tagline-box">
									<span class="section-title__tagline">. : trusted for agency : .</span>
								</div>
								<h2 class="section-title__title">some veiled question for you
								</h2>
							</div>
							<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>What can we do for you with Figma?</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<p>Through our years of experience, we’ve also learned that while each
												channel has its own set of advantages, they all work best. when
												strategically paired with other channels.</p>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion  active">
									<div class="accrodion-title">
										<h4>What is the standard size of business cards?</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<p>Through our years of experience, we’ve also learned that while each
												channel has its own set of advantages, they all work best. when
												strategically paired with other channels.</p>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion">
									<div class="accrodion-title">
										<h4>What can we do you with Adobe Figma?</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<p>Through our years of experience, we’ve also learned that while each
												channel has its own set of advantages, they all work best. when
												strategically paired with other channels.</p>
										</div><!-- /.inner -->
									</div>
								</div>
								<div class="accrodion last-child">
									<div class="accrodion-title">
										<h4>Do you create one single full home page?</h4>
									</div>
									<div class="accrodion-content">
										<div class="inner">
											<p>Through our years of experience, we’ve also learned that while each
												channel has its own set of advantages, they all work best. when
												strategically paired with other channels.</p>
										</div><!-- /.inner -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Faq One End -->

		<!-- Feature one Start -->
		<section class="feature-two">
			<div class="feature-two__inner clearfix marquee_mode">
				<ul class="feature-two__list clearfix">
					<li><a href="#"><i class="icon-play-button"></i><span>Get Now :</span> A free consultation for
							design</a></li>
					<li><a href="#"><i class="icon-play-button"></i><span>Get Now :</span> A free consultation for
							design</a></li>
					<li><a href="#"><i class="icon-play-button"></i><span>Get Now :</span> A free consultation for
							design</a></li>
					<li><a href="#"><i class="icon-play-button"></i><span>Get Now :</span> A free consultation for
							design</a></li>
					<li><a href="#"><i class="icon-play-button"></i><span>Get Now :</span> A free consultation for
							design</a></li>
				</ul>
			</div><!-- /.feature-one__inner -->
		</section>
		<!-- Feature one End -->

		<!-- Services Three Start -->
		<section class="services-three">
			<div class="services-three__shape-1" style="background-image: url(images/shapes/services-three-shape-1.jpg);"></div>
			<div class="services-three__top">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="services-three__left">
								<div class="section-title text-left">
									<div class="section-title__tagline-box">
										<span class="section-title__tagline">. : WHAT WE’RE OFFERING : .</span>
									</div>
									<h2 class="section-title__title">Services we're providing to our customers</h2>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="services-three__right">
								<p class="services-three__top-text">We provide expert digital marketing, website development, and graphic design services to help businesses grow. Our solutions are tailored to boost brand visibility and customer engagement.</p>
								<div class="services-three__btn-box">
.
								</div>
								<div class="services-three__nav">
									<div class="swiper-button-prev" id="services-three__swiper-button-next">
										<i class="icon-arrow-left"></i>
									</div>
									<div class="swiper-button-next" id="services-three__swiper-button-prev">
										<i class="icon-arrow-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="services-three__bottom">
				<div class="thm-swiper__slider swiper-container services-three__carousel" data-swiper-options='{"spaceBetween": 30, "slidesPerView": 4, 
						"loop": true,
						"pagination": {
							"el": "#testimonial-one-pagination",
							"type": "bullets",
							"clickable": true
							},
							"navigation": {
							"nextEl": "#services-three__swiper-button-next",
							"prevEl": "#services-three__swiper-button-prev"
							}, 
							"autoplay": { "delay": 5000 }, 
							"breakpoints": {
							"0": {
								"spaceBetween": 40,
								"slidesPerView": 1
							},
							"375": {
								"spaceBetween": 40,
								"slidesPerView": 1
							},
							"575": {
								"spaceBetween": 40,
								"slidesPerView": 1
							},
							"767": {
								"spaceBetween": 40,
								"slidesPerView": 2
							},
							"991": {
								"spaceBetween": 40,
								"slidesPerView": 3
							},
							"1199": {
								"spaceBetween": 40,
								"slidesPerView": 4
							},
							"1350": {
								"spaceBetween": 40,
								"slidesPerView": 4
							}
						}}'>
					<div class="swiper-wrapper">
						<!--Services Three Single Start -->
						<div class="swiper-slide">
							<div class="services-three__single">
								<div class="services-three__img-box">
									<div class="services-three__img">
										<img src="images/services/services-3-1.jpg" alt="">
									</div>
									<div class="services-three__title-box">
										<h3><a href="services-details.php">Website
												<br> development</a></h3>
									</div>
									<div class="services-three__hover-content">
										<h3 class="services-three__hover-title"><a href="services-details.php">Website
												<br> development</a></h3>
										<p class="services-three__hover-text">Akansh Digital Marketing builds dynamic websites with modern designs, SEO optimization, and user-friendly features, ensuring strong online presence, better engagement, and business growth for clients.</p>
									</div>
									<a href="contact.php" class="services-three__hover-btn">Contact
										<br> Us<span class="icon-up-right-arrow-1"></span></a>
								</div>
							</div>
						</div>
						<!--Services Three Single End -->
						<!--Services Three Single Start -->
						<div class="swiper-slide">
							<div class="services-three__single">
								<div class="services-three__img-box">
									<div class="services-three__img">
										<img src="images/services/services-3-2.jpg" alt="">
									</div>
									<div class="services-three__title-box">
										<h3><a href="services-details.php">Graphic
												<br> designing</a></h3>
									</div>
									<div class="services-three__hover-content">
										<h3 class="services-three__hover-title"><a href="services-details.php">Graphic
												<br> designing</a></h3>
										<p class="services-three__hover-text">Akansh Digital Marketing offers creative graphic design services, delivering stunning visuals, logos, and marketing materials that enhance brand identity, captivate audiences, and drive business growth effectively.</p>
									</div>
									<a href="contact.php" class="services-three__hover-btn">Contact
										<br> Us<span class="icon-up-right-arrow-1"></span></a>
								</div>
							</div>
						</div>
						<!--Services Three Single End -->
						<!--Services Three Single Start -->
						<div class="swiper-slide">
							<div class="services-three__single">
								<div class="services-three__img-box">
									<div class="services-three__img">
										<img src="images/services/services-3-3.jpg" alt="">
									</div>
									<div class="services-three__title-box">
										<h3><a href="services-details.php">Mobile
												<br> application</a></h3>
									</div>
									<div class="services-three__hover-content">
										<h3 class="services-three__hover-title"><a href="services-details.php">Mobile
												<br> application</a></h3>
										<p class="services-three__hover-text">Akansh Digital Marketing offers a powerful mobile app for businesses, enabling targeted campaigns, performance analytics, and client engagement to boost growth and digital presence.</p>
									</div>
									<a href="contact.php" class="services-three__hover-btn">Contact
										<br> Us<span class="icon-up-right-arrow-1"></span></a>
								</div>
							</div>
						</div>
						<!--Services Three Single End -->
						<!--Services Three Single Start -->
						<div class="swiper-slide">
							<div class="services-three__single">
								<div class="services-three__img-box">
									<div class="services-three__img">
										<img src="images/services/services-3-4.jpg" alt="">
									</div>
									<div class="services-three__title-box">
										<h3><a href="services-details.php">Digital
												<br> marketing</a></h3>
									</div>
									<div class="services-three__hover-content">
										<h3 class="services-three__hover-title"><a href="services-details.php">Digital
												<br> marketing</a></h3>
										<p class="services-three__hover-text">Akansh Digital Marketing boosts brands with SEO, social media, content marketing, and paid ads, driving traffic, visibility, and business growth effectively.</p>
									</div>
									<a href="contact.php" class="services-three__hover-btn">Contact
										<br> Us<span class="icon-up-right-arrow-1"></span></a>
								</div>
							</div>
						</div>
						<!--Services Three Single End -->
					</div>
				</div>
			</div>
		</section>
		<!-- Services Three End -->

		<!-- Feature Three Start -->
		<section class="feature-three">
			<div class="feature-three__shape-1" style="background-image: url(images/shapes/feature-three-shape-1.jpg);">
			</div>
			<div class="feature-three__inner clearfix marquee_mode">
				<ul class="feature-three__list clearfix">
					<li><a href="#">Design</a></li>
					<li><a href="#">*</a></li>
					<li><a href="#">Figma</a></li>
					<li><a href="#">*</a></li>
					<li><a href="#">Development</a></li>
					<li><a href="#">*</a></li>
				</ul>
			</div><!-- /.feature-Three__inner -->
		</section>
		<!-- Feature Three End -->

		<!-- Team Three Start -->
		<section class="team-two">
			<div class="team-two__bg" style="background-image: url(images/shapes/team-two-bg.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-xl-3">
						<div class="team-two__left">
							<div class="section-title text-left">
								<div class="section-title__tagline-box">
									<span class="section-title__tagline">. : our team members : .</span>
								</div>
								<h2 class="section-title__title">We Bring a Core Team Of Experts World.</h2>
							</div>
							<div class="team-two__btn-box">
								<a href="team.php" class="team-two__btn thm-btn">View More Members</a>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="team-two__right">
							<div class="row">
								<!--Team Two Single Start-->
								<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
									<div class="team-two__single">
										<div class="team-two__img-box">
											<div class="team-two__img">
												<img src="images/team/team-1.jpg" alt="">
											</div>

										</div>
										<div class="team-two__content">
											<h3 class="team-two__title"><a href="team.php">Vrushabh Jansari</a>
											</h3>
											<p class="team-two__sub-title">CEO</p>
										</div>
									</div>
								</div>
								<!--Team Two Single End-->
								<!--Team Two Single Start-->
								<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
									<div class="team-two__single">
										<div class="team-two__img-box">
											<div class="team-two__img">
												<img src="images/team/team-2.jpg" alt="">
											</div>
											
										</div>
										<div class="team-two__content">
											<h3 class="team-two__title"><a href="team.php">Riddhi Jansari</a>
											</h3>
											<p class="team-two__sub-title">HR</p>
										</div>
									</div>
								</div>
								<!--Team Two Single End-->
								<!--Team Two Single Start-->
								<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
									<div class="team-two__single">
										<div class="team-two__img-box">
											<div class="team-two__img">
												<img src="images/team/team-3.jpg" alt="">
											</div>

										</div>
										<div class="team-two__content">
											<h3 class="team-two__title"><a href="team.php">Vrutik Goti</a>
											</h3>
											<p class="team-two__sub-title">Application Developer</p>
										</div>
									</div>
								</div>
								<!--Team Two Single End-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team Three End -->

		<!-- Get In Touch Start -->
		<?php include('GetInTouch.php') ?>

		<!-- Get In Touch End -->


		<!-- Main Footer Start -->

		<?php include('footer.php') ?>

		<!-- Main Footer End -->


		<!-- Color Palate / Color Switcher -->

		<!-- End Color Palate / Color Switcher -->

		<!-- Search Popup -->
		<div class="search-popup">
			<div class="color-layer"></div>
			<button class="close-search"><span class="far fa-times fa-fw"></span></button>
			<form method="post" action="blog.php">
				<div class="form-group">
					<input type="search" name="search-field" value="" placeholder="Search Here" required="">
					<button type="submit"><i class="far fa-search fa-fw"></i></button>
				</div>
			</form>
		</div>
		<!-- End Search Popup -->

	</div>
	<!-- End PageWrapper -->

	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up fa-fw"></span></div>

	<script src="js/jquery.js"></script>
	<script src="js/01-bootstrap.min.js"></script>
	<script src="js/02-nice-select.min.js"></script>
	<script src="js/03-color-settings.js"></script>
	<script src="js/04-owl.js"></script>
	<script src="js/05-jarallax.min.js"></script>
	<script src="js/06-isotope.js"></script>
	<script src="js/07-wow.js"></script>
	<script src="js/08-validate.js"></script>
	<script src="js/09-appear.js"></script>
	<script src="js/10-swiper.min.js"></script>
	<script src="js/11-jquery.easing.min.js"></script>
	<script src="js/12-gsap.min.js"></script>
	<script src="js/13-odometer.js"></script>
	<script src="js/14-tilt.jquery.min.js"></script>
	<script src="js/15-magnific-popup.min.js"></script>
	<script src="js/16-jquery-ui.js"></script>
	<script src="js/17-ScrollTrigger.js"></script>
	<script src="js/18-SplitText.js"></script>
	<script src="js/19-gsap.js"></script>
	<script src="js/20-countdown.min.js"></script>
	<script src="js/21-marquee.min.js"></script>
	<script src="js/22-jquery.circleType.js"></script>
	<script src="js/23-jquery.lettering.min.js"></script>

	<script src="js/script.js"></script>


	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>