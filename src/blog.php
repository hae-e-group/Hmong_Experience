<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$sql = "SELECT * FROM program WHERE class > 0";
$result = mysqli_query($conn, $sql);

$one_day_list = '';
$master_day_list = '';
while ($row = mysqli_fetch_array($result)) {
    if ($row['class'] == 1) {
        $one_day_list = $one_day_list."<li><a href='blog.php?id={$row['pk']}'>{$row['title']}</a></li>";
    } else {
        $master_day_list = $master_day_list."<li><a href='blog.php?id={$row['pk']}'>{$row['title']}</a></li>";
    }
}

$result = mysqli_query($conn, "select * from program where pk = {$_GET['id']}");
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classes</title>
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
        <div class="background_image" style="background-image:url(images/pattern6.jpeg)"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_content text-center">
                                <div class="home_title">Class</div>
                                <div><p style="font-size:40px;color: #FFFFFF;font-style: italic;">Embrace nature into your bracelet with ethnic Hmong patterns</p></div>
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
                        <div class="blog_post_title"><a href="#"><?= $row['title'] ?></a></div>
                        <br><br>
                            <div class="row">                             
                                <div class="blog_post_image col-5">
                                    <img src="images/magnet_300x300.jpg" alt="">
                                    <!--div class="blog_post_date"><a href="#">Oct 20, 2018</a></div-->
                                </div>
                                <div class="details_list col-7">
                                    <ul>
                                        <li><?= $row['duration'] ?></li>
                                        <li><?= $row['cost'] ?></li>
                                        <li><?= $row['start_date'] ?></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="blog_post_content">
                                <div class="blog_post_text">
                                    <?= $row['detail'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- Recent Posts -->
                        <div class="recent_posts">
                            <div class="sidebar_title"><h4>One Day Class</h4></div>
                            <div class="main_nav sidebar_list">
                                <ul>
                                    <?= $one_day_list ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="categories">
                            <div class="sidebar_title"><h4>Advanced Master Class</h4></div>
                            <div class="main_nav sidebar_list">
                                <ul>
                                    <?= $master_day_list ?>
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

        var current_url = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
        $('.sidebar_list li').find('a').each(function (index, item) {
            if (current_url === $(item).attr('href')) {
                $(item).parent().addClass('active');
            }
        });
    });

</script>

</body>
</html>