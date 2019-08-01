<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The River template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/common.css">
    <link rel="stylesheet" type="text/css" href="styles/blog.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>

<div class="super_container">

    <?php include('include/header.php') ?>

    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(images/booking.jpg)"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Blog</div>
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

    <!-- Blog -->



    <div class="blog">
        <div class="container">
            <div class="row">
                <!-- Blog Posts -->
                <div class="col-lg-9">
                    <div class="blog_posts">
                        <!-- Blog Post -->
                        <div class="blog_post">
                            <div class="row">
                                <div class="blog_post_image col-6">
                                    <img src="images/magnet_300x300.jpg" alt="">
                                    <!--div class="blog_post_date"><a href="#">Oct 20, 2018</a></div-->
                                </div>
                                <div class="details_list col-6">
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
                            </div>

                            <div class="blog_post_content">
                                <div class="blog_post_title"><a href="#">Make a Magnet</a></div>
                                <div class="blog_post_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_4.png" alt="">
                                            <a class="youtube" href="https://www.youtube.com/embed/v64KOxKVLVg">Video</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_5.png" alt="">
                                            <a href="#">21 Likes</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_6.png" alt="">
                                            <a href="#">602 views</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_7.png" alt="">
                                            <a href="#">1 min</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_8.png" alt="">
                                            <a href="#">3 comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog_post_text">
                                    <p>Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas
                                        sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra
                                        augue, ac porttitor dolor consequat eget. Cras tempor suscipit enim vehicula
                                        ultrices. Mauris sed orci blandit.</p>

                                </div>
                                <div class="button blog_post_button"><a href="#">Read More</a></div>
                            </div>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog_post">
                            <div class="blog_post_image">
                                <img src="images/blog_2.jpg" alt="">
                                <div class="blog_post_date"><a href="#">Oct 20, 2018</a></div>
                            </div>
                            <div class="blog_post_content">
                                <div class="blog_post_title"><a href="#">How to book your stay</a></div>
                                <div class="blog_post_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_4.png" alt="">
                                            <a href="#">News</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_5.png" alt="">
                                            <a href="#">21 Likes</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_6.png" alt="">
                                            <a href="#">602 views</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_7.png" alt="">
                                            <a href="#">1 min</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_8.png" alt="">
                                            <a href="#">3 comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog_post_text">
                                    <p>Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas
                                        sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra
                                        augue, ac porttitor dolor consequat eget. Cras tempor suscipit enim vehicula
                                        ultrices. Mauris sed orci blandit.</p>
                                </div>
                                <div class="button blog_post_button"><a href="#">Read More</a></div>
                            </div>
                        </div>

                        <!-- Blog Post -->
                        <div class="blog_post">
                            <div class="blog_post_image">
                                <img src="images/blog_3.jpg" alt="">
                                <div class="blog_post_date"><a href="#">Oct 20, 2018</a></div>
                            </div>
                            <div class="blog_post_content">
                                <div class="blog_post_title"><a href="#">Perfect beach wedding</a></div>
                                <div class="blog_post_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_4.png" alt="">
                                            <a href="#">News</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_5.png" alt="">
                                            <a href="#">21 Likes</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_6.png" alt="">
                                            <a href="#">602 views</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_7.png" alt="">
                                            <a href="#">1 min</a>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <img src="images/icon_8.png" alt="">
                                            <a href="#">3 comments</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog_post_text">
                                    <p>Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas
                                        sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra
                                        augue, ac porttitor dolor consequat eget. Cras tempor suscipit enim vehicula
                                        ultrices. Mauris sed orci blandit.</p>
                                </div>
                                <div class="button blog_post_button"><a href="#">Read More</a></div>
                            </div>
                        </div>

                        <!-- Page Nav -->
                        <div class="page_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-start">
                                <li class="active"><a href="#">01.</a></li>
                                <li><a href="#">02.</a></li>
                                <li><a href="#">03.</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Recent Posts -->
                        <div class="recent_posts">
                            <div class="sidebar_title"><h4>One Day Class</h4></div>
                            <div class="sidebar_list">
                                <ul>
                                    <li><a href="#">Make a Magnet</a></li>
                                    <li><a href="#">Make a Bracelet</a></li>
                                    <li><a href="#">Make a Postcard</a></li>
                                    <li><a href="#">Video Post</a></li>
                                    <li><a href="#">Audio Post</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="categories">
                            <div class="sidebar_title"><h4>Master Class</h4></div>
                            <div class="sidebar_list">
                                <ul>
                                    <li><a href="#">Make a Magnet</a></li>
                                    <li><a href="#">Make a Bracelet</a></li>
                                    <li><a href="#">Make a Postcard</a></li>
                                </ul>
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
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/blog.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    })

</script>

</body>
</html>