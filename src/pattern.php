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

    <?php include('include/header.php') ?>

    <!-- Home -->

    <div class="home">
        <div class="background_image" style="background-image:url(images/pattern2.jpeg)"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Pattern</div>
                            <div><p style="font-size:40px;color: #FFFFFF;font-style: italic;">Hmong's motifs and patterns represent their individual life stories, culture, and history.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->

    <div class="pattern_brief">
        <div class="container">
            <div class="row">
                <!-- About Images -->
                <div class="col-lg-6">
                    <img height="500px" width="400px" src="images/pattern_history.jpeg">
                </div>
                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="pattern_brief_title">The patterns are not just commercial product.</div>
                    <div class="pattern_brief_content">
                        They are Hmong's history and The Hmong's 
                        spirit in the patterns are passed down to succeeding generations with unique values in
                        the patterns. Hmong textiles are primary agent of culture, language and identity.</br>
                        รูปแบบไม่ได้เป็นเพียงผลิตภัณฑ์เชิงพาณิชย์พวกเขาเป็นประวัติศาสตร์ของม้งและจิตวิญญาณของม้งในรูปแบบถูกส่งผ่านไปยังคนรุ่นต่อ ๆ ไปด้วยค่านิยมที่ไม่ซ้ำกันในรูปแบบ ม้งทอเป็นตัวแทนหลักของวัฒนธรรมภาษาและเอกลักษณ์
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About -->

    <div class="pattern_meaning">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="about_title">The Hmong Patterns</div>
                    <!-- Hmong Pattern List -->
                    <select class="image-picker show-html"> <!-- data-limit="1" multiple="multiple"> -->
                        <option data-img-src="images/patterns/seeds.jpg" value="seeds">Seeds</option>
                        <option data-img-src="images/patterns/chicken_feet.jpg" value="chicken_feet">Chicken_feet</option>
                        <option data-img-src="images/patterns/diamond.jpg" value="diamond">Diamond</option>
                        <option data-img-src="images/patterns/dragons_tails.jpg" value="dragons_tails">Dragons_tails</option>
                        <option data-img-src="images/patterns/house.JPG" value="house">House</option>
                        <option data-img-src="images/patterns/leaf_frond.jpg" value="leaf_frond">Leaf_frond</option>
                        <option data-img-src="images/patterns/mountain.jpg" value="mountain">Mountain</option>
                        <option data-img-src="images/patterns/rams_horn.jpg" value="rams_horn">Rams_horn</option>
                        <option data-img-src="images/patterns/tigers_claw.jpg" value="tigers_claw">Tigers_claw</option>
                        <option data-img-src="images/patterns/cocks_comb.jpg" value="cocks_comb">Cocks_comb</option>
                        <option data-img-src="images/patterns/cucumber_seeds.jpg" value="cucumber_seeds">Cucumber_seeds</option>
                        <option data-img-src="images/patterns/fish_scale.jpg" value="fish_scale">Fish_scale</option>
                        <option data-img-src="images/patterns/vegetable_blossom.jpg" value="vegetable_blossom">Vegetable_blossom</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <!-- Single pattern meaning -->
                    <div id="seeds">
                        <div class="pattern_meaning_title">Seeds(เมล็ดพันธุ์พืช)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from seeds.</br>
                            It means "Abundance".</br>
                            รูปแบบนี้สร้างจากเมล็ด</br>
                            มันหมายถึงความอุดมสมบูรณ์</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/seeds.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/seeds.jpg">
                        </div>
                    </div>
                    <div id="chicken_feet" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Chicken's feet(เท้าไก่)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from chicken's feet.</br>
                            It means "Guide to spirit world".</br>
                            รูปแบบนี้สร้างขึ้นจากเท้าของไก่</br>
                            มันหมายถึง "คู่มือสู่โลกวิญญาณ"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/chicken_feet.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/chicken_feet.jpg">
                        </div>
                    </div>
                    <div id="diamond" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Diamond(เพชร)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from diamond.</br>
                            It means "Earth"</br>
                            ลวดลายนี้สร้างขึ้นจากเพชร</br>
                            มันหมายถึง "โลก"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/diamond.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/diamond.jpg">
                        </div>
                    </div>
                    <div id="dragons_tails" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Dragon's tails(หางมังกร)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from dragon's tails.</br>
                            It means "Power".</br>
                            รูปแบบนี้สร้างจากหางของมังกร</br>
                            มันหมายถึง "พลังงาน"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/dragons_tails.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/dragons_tails.jpg">
                        </div>
                    </div>
                    <div id="house" style="DISPLAY: none">
                        <div class="pattern_meaning_title">House(บ้าน)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from house.</br>
                            It means "Unity".</br>
                            ลวดลายนี้สร้างขึ้นจากบ้าน</br>
                            มันหมายถึง "ความสามัคคี"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/house.JPG" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/house.JPG">
                        </div>
                    </div>
                    <div id="leaf_frond" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Leaf's frond(ใบของใบ)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from leaf's frond.</br>
                            It means "Growth".</br>
                            รูปแบบนี้ถูกสร้างขึ้นจากใบของใบ</br>
                            มันหมายถึง "การเติบโต"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/leaf_frond.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/leaf_frond.jpg">
                        </div>
                    </div>
                    <div id="mountain" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Mountain(ภูเขา)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from mountain.</br>
                            It means "Strength".</br>
                            ลวดลายนี้สร้างจากภูเขา</br>
                            มันหมายถึง "ความแข็งแกร่ง"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/mountain.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/mountain.jpg">
                        </div>
                    </div>
                    <div id="rams_horn" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Ram's horn(เขาแกะ)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from ram's horn.</br>
                            It means "Wisdom".</br>
                            ลวดลายนี้ถูกสร้างขึ้นจากเขาแกะ</br>
                            มันหมายถึง "ปัญญา"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/rams_horn.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/rams_horn.jpg">
                        </div>
                    </div>
                    <div id="cocks_comb" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Cock's comb(หวีของไก่)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from cocks's tails.</br>
                            It means "Superior".</br>
                            รูปแบบนี้ถูกสร้างขึ้นจากหางของไก่ชน</br>
                            มันหมายถึง "Superior"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/cocks_comb.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/cocks_comb.jpg">
                        </div>
                    </div>
                    <div id="vegetable_blossom" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Vegetable blossom(ดอกผัก)</div>
                        <div class="pattern_meaning_content">
                            This pattern is create from vegetable blossom.</br>
                            It means "Prosperity".</br>
                            รูปแบบนี้ถูกสร้างขึ้นจากดอกผัก</br>
                            มันหมายถึง "ความเจริญรุ่งเรือง"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/vegetable_blossom.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/vegetable_blossom.jpg">
                        </div>
                    </div>
                    <div id="fish_scale" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Fish's scale(เกล็ดปลา)</div>
                        <div class="pattern_meaning_content">
                            This pattern is created from fish's scale.</br>
                            It means "Flexibility".</br>
                            รูปแบบนี้ถูกสร้างขึ้นจากใบของใบ</br>
                            มันหมายถึง "ความยืดหยุ่น"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/fish_scale.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/fish_scale.jpg">
                        </div>
                    </div>
                    <div id="tigers_claw" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Tiger's claw(กรงเล็บเสือ)</div>
                        <div class="pattern_meaning_content">
                            This pattern is create from tiger claws.</br>
                            It means "Brave".</br>
                            ลวดลายนี้สร้างจากกรงเล็บเสือ</br>
                            มันหมายถึง "กล้าหาญ"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/tigers_claw.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/tigers_claw.jpg">
                        </div>
                    </div>
                    <div id="cucumber_seeds" style="DISPLAY: none">
                        <div class="pattern_meaning_title">Cucumbers seeds(เมล็ดแตงกวา)</div>
                        <div class="pattern_meaning_content">
                            This pattern is create from cucumbers seeds.</br>
                            It means "Fresh".</br>
                            รูปแบบนี้สร้างจากเมล็ดแตงกวา</br>
                            มันหมายถึง "สด"</br>
                            <br/>
                            <div class="button button_1"><a href="images/patterns/cucumber_seeds.jpg" download>Download</a></div>
                            <br/>
                            <img style="width:80%; height:80%;" src="images/patterns/cucumber_seeds.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video_div">
        <div class="container">
            <div class="row">

                <!-- About Content -->
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lP2f1lLuhFk"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <!-- About Images -->
                <div class="col-lg-6">
                    <div class="about_content">
                        <!--div class="about_title"><h2>Learn Hmong Pattern <br /> from Hmong Instructors</h2></div-->
                        <div class="about_text">
                            <p>Hmongcl offers various Hmong patterns and their meanings. Patterns that were transmitted only by word of mouth and only in memory are documented, so anyone can easily see and follow, which is very helpful for the transmission of culture heritage.</p>
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
<script src="js/image-picker.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery("select.image-picker").imagepicker({
        hide_select: true,
    });
</script>
</body>
</html>