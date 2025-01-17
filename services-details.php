<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Service Details</title>
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

	<script>
		// Function to scroll to the section based on the query parameter
		function scrollToService() {
			const urlParams = new URLSearchParams(window.location.search);
			const service = urlParams.get('service');

			if (service) {
				// Select the section dynamically based on the service key
				const targetSection = document.getElementById(service);

				if (targetSection) {
					// Scroll to the corresponding section
					targetSection.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
			}
		}

		// Call the function when the page loads
		window.onload = scrollToService;
	</script>
</head>

<body>
	<?php include('header.php'); ?>

	<div class="services-detailes">
		<!-- Header -->

		<!-- SEO Section -->
		<div id="seo-marketing">
			<?php include('Service-Details/seo.php'); ?>
		</div>

		<!-- Digital Marketing Section -->
		<div id="digital-marketing">
			<?php include('Service-Details/digital.php'); ?>
		</div>

		<!-- Content Marketing Section -->
		<div id="content-marketing">
			<?php include('Service-Details/Content.php'); ?>
		</div>

		<!-- NFC Digital Cards Section -->
		<div id="nfc-digital-cards">
			<?php include('Service-Details/NFT.php'); ?>
		</div>

		<!-- Footer -->
		<?php include('footer.php'); ?>
	</div>

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

</body>

</html>