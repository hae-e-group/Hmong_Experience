<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

$people_list = '';

while ($row = mysqli_fetch_array($result)) {

    $people = array(
        'contact_id' => $row['pk'],
        'name' => $row['name'],
        'image' => $row['image'],
        'about' => $row['about'],
        'instagram' => $row['instagram'],
        'facebook' => $row['facebook'],
        'skill' => $row['skill']
    );

    $people_list = $people_list
        ."<div class='test_slider_item text-center'>
            <div class='testimonial_title'><a href='javascript:show_layer(".json_encode($people).");'>{$people['name']}</a></div>
            <div class='testimonial_image'><a href='javascript:show_layer(".json_encode($people).");'><img src='uploads/{$people['image']}' alt=''></a></div>
            <div class='testimonial_text'>
                <p>{$people['about']}</p>
            </div>";

    if ($row['instagram'] != "") {
        $people_list = $people_list
        ."<div class='testimonial_sns_img'><img src='images/instagram_icon.jpg'></div>
            <div class='testimonial_sns d-flex'><a href='https://www.instagram.com/{$people['instagram']}/'>Instagram</a></div>";
    }

    if ($row['facebook'] != "") {
        $people_list = $people_list
        ."<div class='testimonial_sns_img'><img src='images/facebook_icon.jpg'></div>
            <div class='testimonial_sns d-flex'><a href='https://www.facebook.com/{$people['facebook']}'>Facebook</a></div>";
    }

    $people_list = $people_list."</div>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>People</title>
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
    <link rel="stylesheet" type="text/css" href="styles/people.css">
    <link rel="stylesheet" type="text/css" href="styles/people_responsive.css">
</head>
<body>

<div class="super_container">

    <?php include('include/header.php') ?>

    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(images/hmong_background.jpg)"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Hmong Craft Women</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="container">
            <div class="testimonial_whole_title">Hmong Craft Women</div>
            <div class="row">
                <div class="col">
                    <div class="testimonials_slider_container">

                        <!-- Testimonials Slider -->
                        <div class="owl-carousel owl-theme test_slider">

                            <!-- Slide -->
                            <?= $people_list ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="people_detail_model" style="DISPLAY: none">
        <div class="container">
            <div class="about_women">
                <div class="row d-flex">
                    <div id="image_div" class="col-lg-6">
                        <img class="about_women_img" src="images/yeong_han.jpg">
                    </div>
                    <div class="col-lg-6">
                        <div id="name_div" class="about_women_title">Yeonghan Kwon</div>
                        <div id="about_div"><p>Yeonghan is ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~
                                ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~ ~~~~.</p></div>
                        <div class="about_women_subtitle">Techniques</div>
                        <ul id="skill_div">
                            <li>Acapella (9 years)</li>
                            <li>Taekwondo (4 Dan)</li>
                            <li>Drum (3 months)</li>
                        </ul>

                        <div class="about_women_subtitle">Classes</div>
                        <ul id="class_div">
                            <li><a href="#">Fundamental Acapella</a></li>
                            <li><a href="#">Advanced Taekwondo</a></li>
                        </ul>
                    </div>
                </div>
                <div id="instaPics"></div>
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
<script src="js/people.js"></script>
<script type="text/javascript">
    function show_layer(json) {
        $('#people_detail_model').show();

        //$('#name_div').empty();
        $('#name_div').html(json.name);
        $('#about_div').empty();
        $('#about_div').append('<p>' + json.about + '</p>');

        $('#skill_div').empty();

        var skill = json.skill.split(',');

        for (i in skill) {
            $('#skill_div').append('<li>' + skill[i] + '</li>');
        }

        $('#class_div').empty();

        $.ajax({
            type: 'POST',
            url: 'get_class.php',
            data: { id:json.contact_id },
            dataType: 'json',
            success: function(data, status, xhr) {
                data.forEach(function (element) {
                    $('#class_div').append('<li><a href="blog.php?id=' + element.pk + '">' + element.title + '</a></li>')
                });
                console.log(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
                alert('fail');
            }
        });

    }
</script>
</body>
</html>