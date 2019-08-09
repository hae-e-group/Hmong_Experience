<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$sql = "select p.pk, p.title, p.image, p.overview, c.name, c.ti_name from lecturer l left join contact c on l.contact_pk = c.pk left join program p on l.program_pk = p.pk where c.name is not null";
$result = mysqli_query($conn, $sql);

$program_list = '';
while ($row = mysqli_fetch_array($result)) {
    $program_list = $program_list
        ."<div class=\"booking_item text-center\">
                                <div class=\"booking_title\"><a href=\"class.php?id={$row['pk']}\">{$row['title']}</a></div>
                                <div class=\"booking_image\"><img src=\"uploads/{$row['image']}\" alt=\"\"></div>
                                <div class=\"booking_text\">
                                    <p>{$row['overview']}</p>
                                </div>

                                <div class=\"booking_author\"><a href=\"class.php?id={$row['pk']}\">{$row['name']}</a>, {$row['ti_name']}</div>
                            </div>";
}




?>

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
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!--div class="home_slider_container"-->
                        <div class="owl-carousel owl-theme home_slider">
                            <!-- Slide -->
                            <div class="slide">
                                <div class="background_image" style="background-image:url(images/main_bg.jpeg); opacity: 0.7"></div>
                            </div>
                            <div class="slide">
                                <div class="background_image" style="background-image:url(images/pattern1.jpeg); opacity: 0.7"></div>
                            </div>
                            <div class="slide">
                                <div class="background_image" style="background-image:url(images/pattern2.jpeg); opacity: 0.7"></div>
                            </div>
                            <div class="slide">
                                <div class="background_image" style="background-image:url(images/pattern3.jpeg); opacity: 0.7"></div>
                            </div>
                            <div class="slide">
                                <div class="background_image" style="background-image:url(images/pattern4.jpeg); opacity: 0.7"></div>
                            </div>
                            <div class="slide">
                                <div class="background_image" style="background-image:url(images/pattern5.jpeg); opacity: 0.7"></div>
                            </div>
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
                                </ul>
                            </div>
                        </div>
                    <!--/div-->
                </div> <!--col-->

                <div class="col-lg-4">
                    <div class="about_content">
                        <div class="about_title" style="vertical-align:middle"><h2>Find Hmong craftswomen here and learn their cultural heritage.</h2></div>
                        <div class="about_text">
                            <p>Find Hmong pattern artisans here and learn their cultural heritage onsite in Doi Pui Hmong Tribal Village in Chiang Mai.
                            This site provides you with a list of Hmong instructors and on-site classes.
                            </p>
                        </div>
                    </div>
                </div> <!--col-->
            </div> <!-- row -->
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
                        <img src="images/map.jpg">
                    </div>
                </div>

                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="about_content">
                        <!--<<div class="about_title"><h2>Find Hmong Experts here and learn their cultural heritage.</h2></div>-->
                        <!--div class="about_title"><h2 style="color: #003eff">Learn Hmong Pattern</h2> <br /> <h2 style="color: #FF6347;">from Hmong Instructors</h2></div-->
                        <div class="about_text">
                            <p> Hmong had written many documentary books but they were lost during evacuation from wars. 
                                To avoid loss of those historical stories and wisdom, Hmong used patterns and attached them onto women's skirts.
                                Today the patterns on the skirts are interpreted in many direction.
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
                    <div class="booking_title text-center"><h2>Book a Class</h2></div>

                    <!-- Booking Slider -->
                    <div class="booking_slider_container">
                        <div class="owl-carousel owl-theme booking_slider">

                            <?= $program_list ?>

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