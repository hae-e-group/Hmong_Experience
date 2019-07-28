<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$program = array(
    'title' => '',
    'contents' => '',
    'detail' => '',
    'price' => '',
    'time' => '',
    'video' => '',
    'image' => '');


if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM program WHERE pk={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $program['title'] = $row['title'];
    $program['contents'] = $row['contents'];
    $program['detail'] = $row['detail'];
    $program['price'] = $row['price'];
    $program['time'] = $row['time'];
    $program['video'] = $row['video'];
    $program['image'] = $row['image'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HaeTae | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Dropzone.css -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-h-square"></i> <span>HaeTae</span></a>
                </div>

                <div class="clearfix"></div>
                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="home.php"><i class="fa fa-home"></i> Home </span></a></li>
                            <li><a href="calendar2.php"><i class="fa fa-calendar"></i> Calendar </span></a></li>
                            <li><a href="program.php"><i class="fa fa-child"></i> Program </span></a>
                                <ul class="nav child_menu">
                                    <li><a href="program_edit.php">Program edit</a></li>
                                </ul>
                            </li>
                            <li><a href="booking.php"><i class="fa fa-check"></i> Booking </span></a></li>
                            <li><a href="inbox.php"><i class="fa fa-check"></i> Inbox </span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Program <small>add program</small></h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Program infomation <small>edit program information</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                      action="update_program.php" method="POST">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="title" required="required"
                                                   class="form-control col-md-7 col-xs-12" , name="title"
                                                   value="<?= $program['title'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="contents"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Contents</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="contents" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="contents" value="<?= $program['contents'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="detail"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Detail</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="detail" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="detail" value="<?= $program['detail'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="price" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="price" value="<?= $program['price'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="time" class="control-label col-md-3 col-sm-3 col-xs-12">Time</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="time" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="time" value="<?= $program['time'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="video"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Video</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="video" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="video" value="<?= $program['video'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="thumb"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <?php
                                            if ($program['image'] == '') {
                                                echo "<p class='form-control col-md-7 col-xs-12'>None</p>";
                                            } else {
                                                echo "<img src='uploads/{$program['image']}' class='col-md-7 col-xs-12' />";
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                    <input type="hidden" name="image" id="image" value="<?= $program['image'] ?>"/>
                                </form>

                                <div class="form-group">
                                    <p class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-2">Drag image
                                        file. Only single image supported.</p>
                                    <form action="upload_image.php" enctype="multipart/form-data"
                                          class="col-md-7 col-xs-12 col-md-offset-2 dropzone" id="fileDropzone"></form>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <br/>
                                        <button class="btn btn-primary" type="button"
                                                onclick="location.href='program.php'">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <button type="button" class="btn btn-danger" id="delete_image">Delete Image
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">

            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- Dropzone.js -->
<script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

<script type="text/javascript">
    var myDropzone = new Dropzone("#fileDropzone", {
        url: "upload_image.php",
        maxFiles: 1,
        acceptedFiles: 'image/*',
        error: function (file, response) {
            console.log(response);
        },
        success: function (file, response) {
            console.log(response);
            $('#image').val(response);
        },
        complete: function (file) {
            console.log("Complete");
        },
        init: function () {
            this.on('addedfile', function (file) {
                if (this.files.length > 1) {
                    this.removeFile(this.files[0]);
                }
            });
        }
    });

    $('.btn-success').on('click', function () {
        $('#demo-form2').submit();
        form_submit();
    });

    $('#delete_image').on('click', function () {
        $('#image').val('');
        form_submit();
    });

    function form_submit() {
        $('#demo-form2').submit();
    }
</script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>