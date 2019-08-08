<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hmong Doipui</title>
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
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/common.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
    <?php include("include/header.php"); ?>

    <!-- Home -->

    <div class="home">
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slide -->
                <?php
                for ($i = 1; $i <= 7; $i++) {
                    echo "<div class=\"slide\">
                    <div class=\"background_image\" style=\"background-image:url(images/pattern{$i}.jpeg)\"></div>
                    <div class=\"home_container\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"home_content text-center\">
                                        <div class=\"home_title\">Find Hmong Experts here and learn their cultural heritage.</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
                }
                ?>



            </div>

            <!-- Home Slider Dots -->
            <div class="home_slider_dots_container">
                <div class="home_slider_dots">
                    <ul id="home_slider_custom_dots"
                        class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
                        <li class="home_slider_custom_dot active">01.</li>
                        <li class="home_slider_custom_dot">02.</li>
                        <li class="home_slider_custom_dot">03.</li>
                        <li class="home_slider_custom_dot">04.</li>
                        <li class="home_slider_custom_dot">05.</li>
                        <li class="home_slider_custom_dot">06.</li>
                        <li class="home_slider_custom_dot">07.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">

                <!-- About Images -->
                <div class="col-lg-6">
                    <!--div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap"-->
                    <div class="about_images">
                        <img src="images/phen_family.jpeg">
                    </div>
                </div>

                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="about_content">
                        <div class="about_title"><h2>Find Hmong Experts here and learn their cultural heritage.</h2></div>
                        <!--div class="about_title"><h2 style="color: #003eff">Learn Hmong Pattern</h2> <br /> <h2 style="color: #FF6347;">from Hmong Instructors</h2></div-->
                        <div class="about_text">
                            <p>Find Hmong pattern artisans here and learn their cultural heritage onsite in Doi Pui Hmong Tribal Village in Chiang Mai.
                                This site provides you with a list of Hmong instructors and on-site classes.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Video -->

    <div class="video_div">
        <div class="container">
            <div class="row">

                <!-- About Images -->
                <div class="col-lg-6">
                    <div class="about_content">
                        <!--div class="about_title"><h2>Learn Hmong Pattern <br /> from Hmong Instructors</h2></div-->
                        <div class="about_text">
                            <p>The practice of embroidery continues to be passed down through generations of
                                Hmong people and paj ndau remain important markers of Hmong ethnicity</p>
                                <p>Cultural heritage will be revitalized and passed down to succeeding generations with the help of digitalized contents and classes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zx0fGgkzLvA"
                                allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Booking -->

    <div class="booking">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="booking_title text-center"><h2>Book a Program</h2></div>
                    <div class="booking_text text-center">
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit
                            sit.</p>
                    </div>

                    <!-- Booking Slider -->
                    <div class="booking_slider_container">
                        <div class="owl-carousel owl-theme booking_slider">

                            <!-- Slide -->
                            <div class="booking_item text-center">
                                <div class="booking_title"><a href="#">Make a Magnet</a></div>
                                <div class="booking_image"><img src="images/magnet_300x300.jpg" alt=""></div>
                                <div class="booking_text">
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet
                                        tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                                </div>

                                <div class="booking_author"><a href="#">Samantha Smith</a>, Greece</div>
                            </div>

                            <!-- Slide -->
                            <div class="booking_item text-center">
                                <div class="booking_title"><a href="#">Make a Bracelet</a></div>
                                <div class="booking_image"><img src="images/bracelet_300x300.jpg" alt=""></div>
                                <div class="booking_text">
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet
                                        tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                                </div>

                                <div class="booking_author"><a href="#">Samantha Smith</a>, Greece</div>
                            </div>

                            <!-- Slide -->
                            <div class="booking_item text-center">
                                <div class="booking_title"><a href="#">Make a Postcard</a></div>
                                <div class="booking_image"><img src="images/postcard_300x300.jpg" alt=""></div>
                                <div class="booking_text">
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet
                                        tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                                </div>

                                <div class="booking_author"><a href="#">Samantha Smith</a>, Greece</div>
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
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>