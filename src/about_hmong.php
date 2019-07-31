<!DOCTYPE html>
<html lang="en">
<head>
    <title>About us</title>
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
</head>
<body>

<div class="super_container">

    <?php include('include/header.php') ?>

    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(images/hmong_background.jpg)"></div>
        <!-- <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">About Hmong</div>
                            <div class="booking_form_container">
                                <form action="#" class="booking_form" id="booking_form">
                                    <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                        <div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Date" required="required"></div>
                                            <div><input type="text" class="booking_input booking_input_b" placeholder="Experience" required="required"></div>
                                            <div><input type="number" class="booking_input booking_input_b" placeholder="Person" required="required"></div>
                                        </div>
                                        <div><button class="booking_button trans_200">Book Now</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_title">The Hmong Tribe</div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="images/hmong_tribe_brief.jpg">
            </div>
            <div class="row about_row">
                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="about_content">
                        <div class="about_text">
                            <p>The Hmong (Miao) claim an origin in the Yellow River region of China.[10] According to
                                linguist Martha Ratliff, there is linguistic evidence to suggest that they have occupied
                                some of the same areas of southern China for over 5,000 years.[11] Evidence from
                                mitochondrial DNA in Hmong–Mien–speaking populations supports the southern origins of
                                maternal lineages even further back in time, although it has been shown that
                                Hmong-speaking populations had comparatively more contact with northern East Asians than
                                had the Mien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="images/about_women_background.jpg" data-speed="0.5"></div>
        <div class="testimonials_overlay"></div>
        <div class="container">
            <div class="testimonial_whole_title">Hmong Craft Women</div>
            <div class="row">
                <div class="col">
                    <div class="testimonials_slider_container">

                        <!-- Testimonials Slider -->
                        <div class="owl-carousel owl-theme test_slider">

                            <!-- Slide -->
                            <div class="test_slider_item text-center">
                                <div class="testimonial_title"><a href="javascript:show_layer('Yeonghan');">Yeonghan
                                        Kwon</a></div>
                                <div class="testimonial_image"><a href="javascript:show_layer('Yeonghan');"><img
                                                src="images/yeong_han.jpg" alt=""></a></div>
                                <div class="testimonial_text">
                                    <p>He is EVP member. he likes playing and hanging out with his friends.</p>
                                </div>
                                <div class="testimonial_sns_img"><img src="images/instagram_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="https://www.instagram.com/honey.han_e/">Instagram</a>
                                </div>
                                <div class="testimonial_sns_img"><img src="images/facebook_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Facebook</a></div>
                            </div>
                            <!-- Slide -->
                            <div class="test_slider_item text-center">
                                <div class="testimonial_title"><a href="javascript:show_layer('Soobin');">Soobin Kim</a>
                                </div>
                                <div class="testimonial_image"><a href="javascript:show_layer('Soobin');"><img
                                                src="images/soo_bin.jpg" alt=""></a></div>
                                <div class="testimonial_text">
                                    <p>She had long hair but now, she has short hair.</p>
                                </div>
                                <div class="testimonial_sns_img"><img src="images/instagram_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Instagram</a></div>
                                <div class="testimonial_sns_img"><img src="images/facebook_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Facebook</a></div>
                            </div>
                            <!-- Slide -->
                            <div class="test_slider_item text-center">
                                <div class="testimonial_title"><a href="javascript:show_layer('Chulwoo');">Chulwoo
                                        Kim</a></div>
                                <div class="testimonial_image"><a href="javascript:show_layer('Chulwoo');"><img
                                                src="images/chul_woo.jpg" alt=""></a></div>
                                <div class="testimonial_text">
                                    <p>He lives in InGyeDong the hottest place in Suwon.</p>
                                </div>
                                <div class="testimonial_sns_img"><img src="images/instagram_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Instagram</a></div>
                                <div class="testimonial_sns_img"><img src="images/facebook_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Facebook</a></div>
                            </div>
                            <!-- Slide -->
                            <div class="test_slider_item text-center">
                                <div class="testimonial_title"><a href="javascript:show_layer('Eunsok');">Eunsok
                                        Hong</a></div>
                                <div class="testimonial_image"><a href="javascript:show_layer('Eunsok');"><img
                                                src="images/eun_seok.jpg" alt=""></a></div>
                                <div class="testimonial_text">
                                    <p>He is the leader of E group. He cannot eat spicy food at all.</p>
                                </div>
                                <div class="testimonial_sns_img"><img src="images/instagram_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Instagram</a></div>
                                <div class="testimonial_sns_img"><img src="images/facebook_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Facebook</a></div>
                            </div>
                            <!-- Slide -->
                            <div class="test_slider_item text-center">
                                <div class="testimonial_title"><a href="javascript:show_layer('Chulmin');">Chulmin
                                        Yeom</a></div>
                                <div class="testimonial_image"><a href="javascript:show_layer('Chulmin');"><img
                                                src="images/chul_min.jpg" alt=""></a></div>
                                <div class="testimonial_text">
                                    <p>He is the artist of Hae. He has the mission that create high quality video.</p>
                                </div>
                                <div class="testimonial_sns_img"><img src="images/instagram_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Instagram</a></div>
                                <div class="testimonial_sns_img"><img src="images/facebook_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Facebook</a></div>
                            </div>
                            <!-- Slide -->
                            <div class="test_slider_item text-center">
                                <div class="testimonial_title"><a href="javascript:show_layer('Eunsol');">Eunsol
                                        Choi</a></div>
                                <div class="testimonial_image"><a href="javascript:show_layer('Eunsol');"><img
                                                src="images/eun_sol.jpg" alt=""></a></div>
                                <div class="testimonial_text">
                                    <p>She is in Education team. she is so ardent that she made studio in her house.</p>
                                </div>
                                <div class="testimonial_sns_img"><img src="images/instagram_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Instagram</a></div>
                                <div class="testimonial_sns_img"><img src="images/facebook_icon.jpg"></div>
                                <div class="testimonial_sns d-flex"><a href="#">Facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function show_layer(div_name) {
            document.all.yeonghan.style.display = "none";
            document.all.soobin.style.display = "none";
            document.all.chulwoo.style.display = "none";
            document.all.eunseok.style.display = "none";
            document.all.chulmin.style.display = "none";
            document.all.eunsol.style.display = "none";
            switch (div_name) {
                case 'Yeonghan':
                    document.all.yeonghan.style.display = "";
                    break;
                case 'Soobin':
                    document.all.soobin.style.display = "";
                    break;
                case 'Chulwoo':
                    document.all.chulwoo.style.display = "";
                    break;
                case 'Eunsok':
                    document.all.eunseok.style.display = "";
                    break;
                case 'Chulmin':
                    document.all.chulmin.style.display = "";
                    break;
                case 'Eunsol':
                    document.all.eunsol.style.display = "";
                    break;
            }
        }
    </script>

    <div id=yeonghan style="DISPLAY: none">
        <div class="about_women">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_women_title">Yeonghan Kwon</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/yeong_han.jpg">
                </div>
                <div class="row about_row">
                    <!-- About Content -->
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="about_text">
                                <p>My name is Yeonghan. My name is Yeonghan. My name is Yeonghan. My name is Yeonghan.
                                    My name is Yeonghan. My name is Yeonghan. My name is Yeonghan. My name is Yeonghan.
                                    My name is Yeonghan. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=soobin style="DISPLAY: none">
        <div class="about_women">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_women_title">Soobin Kim</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/soo_bin.jpg">
                </div>
                <div class="row about_row">
                    <!-- About Content -->
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="about_text">
                                <p>My name is Soobin. My name is Soobin. My name is Soobin. My name is Soobin. My name
                                    is Soobin. My name is Soobin. My name is Soobin. My name is Soobin. My name is
                                    Soobin. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=chulwoo style="DISPLAY: none">
        <div class="about_women">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_women_title">Chulwoo Kim</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/chul_woo.jpg">
                </div>
                <div class="row about_row">
                    <!-- About Content -->
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="about_text">
                                <p>My name is Chulwoo. My name is Chulwoo. My name is Chulwoo. My name is Chulwoo. My
                                    name is Chulwoo. My name is Chulwoo. My name is Chulwoo. My name is Chulwoo. My name
                                    is Chulwoo. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=eunseok style="DISPLAY: none">
        <div class="about_women">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_women_title">Eunseok Hong</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/eun_seok.jpg">
                </div>
                <div class="row about_row">
                    <!-- About Content -->
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="about_text">
                                <p>My name is Eunseok. My name is Eunseok. My name is Eunseok. My name is Eunseok. My
                                    name is Eunseok. My name is Eunseok. My name is Eunseok. My name is Eunseok. My name
                                    is Eunseok. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=chulmin style="DISPLAY: none">
        <div class="about_women">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_women_title">Chulmin Yeom</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/chul_min.jpg">
                </div>
                <div class="row about_row">
                    <!-- About Content -->
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="about_text">
                                <p>My name is Chulmin. My name is Chulmin. My name is Chulmin. My name is Chulmin. My
                                    name is Chulmin. My name is Chulmin. My name is Chulmin. My name is Chulmin. My name
                                    is Chulmin. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=eunsol style="DISPLAY: none">
        <div class="about_women">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_women_title">Eunsol Choi</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/eun_sol.jpg">
                </div>
                <div class="row about_row">
                    <!-- About Content -->
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="about_text">
                                <p>My name is Eunsol. My name is Eunsol. My name is Eunsol. My name is Eunsol. My name
                                    is Eunsol. My name is Eunsol. My name is Eunsol. My name is Eunsol. My name is
                                    Eunsol. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php') ?>
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
</body>
</html>