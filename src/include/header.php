<!-- Header -->
<header class="header">
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><a href="index.php">HaeTae</a></div>
        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
            <nav class="main_nav" id="main_nav_menu">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_hmong.php">About Hmong</a></li>
                    <li><a href="pattern.php">About Patterns</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="book_button"><a href="booking.php">Book Online</a></div>
            <div class="header_phone d-flex flex-row align-items-center justify-content-center">
                <img src="images/phone.png" alt="">
                <span>0183-12345678</span>
            </div>

            <!-- Hamburger Menu -->
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
    </div>
</header>

<!-- Menu -->

<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
    <div class="menu_content">
        <nav class="menu_nav text-right">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_hmong.php">About Hmong</a></li>
                <li><a href="pattern.php">About Patterns</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="menu_extra">
        <div class="menu_book text-right"><a href="#">Book online</a></div>
        <div class="menu_phone d-flex flex-row align-items-center justify-content-center">
            <img src="images/phone-2.png" alt="">
            <span>0183-12345678</span>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    var CURRENT_URL = window.location.href.substring(window.location.href.lastIndexOf('/') + 1);
    $('#main_nav_menu').find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('active');
</script>