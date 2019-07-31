<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
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
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

    <?php include('include/header.php') ?>

    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(images/contact.jpg)"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Contact</div>
                            <div class="booking_form_container">
                                <form action="#" class="booking_form" id="booking_form">
                                    <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                        <div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div><input type="text"
                                                        class="datepicker booking_input booking_input_a booking_in"
                                                        placeholder="Check in" required="required"></div>
                                            <div><input type="text"
                                                        class="datepicker booking_input booking_input_a booking_out"
                                                        placeholder="Check out" required="required"></div>
                                            <div><input type="number" class="booking_input booking_input_b"
                                                        placeholder="Children" required="required"></div>
                                            <div><input type="number" class="booking_input booking_input_b"
                                                        placeholder="Room" required="required"></div>
                                        </div>
                                        <div>
                                            <button class="booking_button trans_200">Book Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Content -->
                <div class="col-lg-6">
                    <div class="contact_content">
                        <div class="contact_title"><h2>Get in touch</h2></div>
                        <div class="contact_list">
                            <ul>
                                <li>M239 ถนน ห้วยแก้ว Tambon Su Thep, Amphoe Mueang Chiang Mai, Chang Wat Chiang Mai
                                    50200, 태국
                                </li>
                                <li>+546 990221 123</li>
                                <li>hae@haetae.com</li>
                            </ul>
                        </div>
                        <div class="contact_form_container">
                            <form action="send_inbox.php" method="POST" class="contact_form" id="contact_form">
                                <div class="row">
                                    <div class="col-md-6 input_container">
                                        <input type="text" class="contact_input" name="name" placeholder="Your name"
                                               required="required">
                                    </div>
                                    <div class="col-md-6 input_container">
                                        <input type="email" class="contact_input" name="email"
                                               placeholder="Your email address" required="required">
                                    </div>
                                </div>
                                <div class="input_container"><input type="text" name="subject" class="contact_input"
                                                                    placeholder="Subject"></div>
                                <div class="input_container"><textarea class="contact_input contact_textarea"
                                                                       name="message" placeholder="Message"
                                                                       required="required"></textarea></div>
                                <button class="contact_button">Send</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="contact_map">

                        <!-- Google Map -->

                        <div class="map">
                            <div id="google_map" class="google_map">
                                <div class="map_container">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include("include/footer.php"); ?>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDvHyUAO2SonfVrHeupMcFjvh-FpBwZrkc"></script>
<script src="js/contact.js"></script>
</body>
</html>