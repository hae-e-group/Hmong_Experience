<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Patterns</title>
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
    <link rel="stylesheet" type="text/css" href="styles/common.css">
	<link rel="stylesheet" type="text/css" href="styles/about_hmong.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/image-picker.css">
	<link rel="stylesheet" type="text/css" href="styles/pattern.css">
</head>
<body>

<div class="super_container">
	
	<?php include ('include/header.php') ?>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/pattern2.jpeg)"></div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-6">
					<div class="about_title">The Hmong Patterns</div>
					<!-- Hmong Pattern List -->
					<select class="image-picker show-html" data-limit="2" multiple="multiple">
						<option data-img-src="images/patterns/snail.JPG" value="snail">snail</option>
						<option data-img-src="images/patterns/elephant_foot.JPG" value="elephant_foot">elephant_foot</option>
						<option data-img-src="images/patterns/house.JPG" value="house">house</option>
						<option data-img-src="images/patterns/mountain.jpg" value="mountain">mountain</option>
						<option data-img-src="images/patterns/quarter.JPG" value="quarter">quarter</option>
						<option data-img-src="images/patterns/snail_chev.JPG" value="snail_chev">snail_chev</option>
						<option data-img-src="images/patterns/step.JPG" value="step">step</option>
						<option data-img-src="images/patterns/x.JPG" value="x">x</option>
					</select>
				</div>
				<div class="col-lg-6">
					<!-- Single pattern meaning -->
					<div id="snail" style="DISPLAY: none">
						<div class="pattern_title">Snail</div>
						<div class="pattern_content">
							This pattern is created from snail.</br>
							It means Wisdom.
						</div>
					</div>
					<div id="elephant_foot" style="DISPLAY: none">
						<div class="pattern_title">Elephant's foot</div>
						<div class="pattern_content">
							This pattern is created from Elephant's foot.</br>
							It means Prosperity.
						</div>
					</div>
					<div id="house" style="DISPLAY: none">
						<div class="pattern_title">House</div>
						<div class="pattern_content">
							This pattern is created from House.</br>
							It means Unity
						</div>
					</div>
					<div id="mountain" style="DISPLAY: none">
						<div class="pattern_title">Mountain</div>
						<div class="pattern_content">
							This pattern is created from Mountain.</br>
							It means Strength.
						</div>
					</div>
					<div id="quarter" style="DISPLAY: none">
						<div class="pattern_title">Quarter</div>
						<div class="pattern_content">
							This pattern is created from Quarter.</br>
							It means Harmony.
						</div>
					</div>
					<div id="snail_chev" style="DISPLAY: none">
						<div class="pattern_title">Snail_chev</div>
						<div class="pattern_content">
							This pattern is created from Snail_chev.</br>
							It means Family.
						</div>
					</div>
					<div id="step" style="DISPLAY: none">
						<div class="pattern_title">Step</div>
						<div class="pattern_content">
							This pattern is created from Step.</br>
							It means Development.
						</div>
					</div>
					<div id="x" style="DISPLAY: none">
						<div class="pattern_title">X</div>
						<div class="pattern_content">
							This pattern is created from X.</br>
							It means Adventure.
						</div>
					</div>
					<!-- Combination pattern meaning -->
					<div id="mountain-snail" style="DISPLAY: none">
						<div class="pattern_title">KING</div>
						<div class="pattern_content">
							This combination means "KING"</br>
							In history, The great kings had strength and wisdom.
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	
	<?php include ('include/footer.php')?>
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
<script src="js/about.js"></script>
<script src="js/image-picker.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery("select.image-picker").imagepicker({
		hide_select: true,
	});
</script>
</body>
</html>