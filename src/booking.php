<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/booking.css">
<link rel="stylesheet" type="text/css" href="styles/booking_responsive.css">
</head>
<body>

<div class="super_container">
	
	<?php include ('include/header.php') ?>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/booking.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Book a room</div>
							<div class="booking_form_container">
								<form action="#" class="booking_form" id="booking_form">
									<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
										<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
											<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
											<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
										</div>
										<div><button class="booking_button trans_200">Book Now</button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<!-- youtube -->
			<div class="row">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<!-- Details Right -->

	<div class="details">
		<div class="container">
			<div class="row">


				<!-- Details Image -->
				<div class="col-xl-7 col-lg-6">
					<div class="details_image">
						<div class="background_image" style="background-image:url(images/details_1.jpg)"></div>
					</div>
				</div>

				<!-- Details Content -->
				<div class="col-xl-5 col-lg-6">
					<div class="details_content">
						<div class="details_title">Family Room</div>
						<div class="details_list">
							<ul>
								<li>27 m² Patio</li>
								<li>Balcony with view</li>
								<li>Garden / Mountain view</li>
								<li>Flat-screen TV</li>
								<li>Air conditioning</li>
								<li>Soundproofing</li>
								<li>Private bathroom</li>
								<li>Free WiFi</li>
							</ul>
						</div>
						<div class="details_long_list">
							<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li>Balcony</li>
								<li>Mountain view</li>
								<li>Terrace</li>
								<li>TV</li>
								<li>Satellite Channels</li>
								<li>Safety Deposit Box</li>
								<li>Heating</li>
								<li>Sofa</li>
								<li>Tile/Marble floor</li>
								<li>Mosquito net</li>
								<li>Wardrobe/Closet</li>
								<li>Sofa bed</li>
								<li>Shower</li>
								<li>Hairdryer</li>
								<li>Free toiletries</li>
								<li>Toilet</li>
								<li>Bath or Shower</li>
								<li>Toilet paper</li>
								<li>Tea/Coffee Maker</li>
								<li>Minibar</li>
								<li>Dining area</li>
								<li>Electric kettle</li>
								<li>Dining table</li>
								<li>Outdoor furniture</li>
								<li>Outdoor dining area</li>
								<li>Towels</li>
								<li>Linen</li>
								<li>Upper floors accessible by lift</li>
							</ul>
						</div>
						<div class="book_now_button"><a href="booking_program.php">Book Now</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Details Left -->

	<div class="details">
		<div class="container">
			<div class="row">

				<!-- Details Content -->
				<div class="col-xl-5 col-lg-6 order-lg-1 order-2">
					<div class="details_content">
						<div class="details_title">Double Room</div>
						<div class="details_list">
							<ul>
								<li>27 m² Patio</li>
								<li>Balcony with view</li>
								<li>Garden / Mountain view</li>
								<li>Flat-screen TV</li>
								<li>Air conditioning</li>
								<li>Soundproofing</li>
								<li>Private bathroom</li>
								<li>Free WiFi</li>
							</ul>
						</div>
						<div class="details_long_list">
							<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li>Balcony</li>
								<li>Mountain view</li>
								<li>Terrace</li>
								<li>TV</li>
								<li>Satellite Channels</li>
								<li>Safety Deposit Box</li>
								<li>Heating</li>
								<li>Sofa</li>
								<li>Tile/Marble floor</li>
								<li>Mosquito net</li>
								<li>Wardrobe/Closet</li>
								<li>Sofa bed</li>
								<li>Shower</li>
								<li>Hairdryer</li>
								<li>Free toiletries</li>
								<li>Toilet</li>
								<li>Bath or Shower</li>
								<li>Toilet paper</li>
								<li>Tea/Coffee Maker</li>
								<li>Minibar</li>
								<li>Dining area</li>
								<li>Electric kettle</li>
								<li>Dining table</li>
								<li>Outdoor furniture</li>
								<li>Outdoor dining area</li>
								<li>Towels</li>
								<li>Linen</li>
								<li>Upper floors accessible by lift</li>
							</ul>
						</div>
						<div class="book_now_button"><a href="booking_program.php">Book Now</a></div>
					</div>
				</div>

				<!-- Details Image -->
				<div class="col-xl-7 col-lg-6 order-lg-2 order-1">
					<div class="details_image">
						<div class="background_image" style="background-image:url(images/details_2.jpg)"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php include ('include/footer.php') ?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/booking.js"></script>
</body>
</html>