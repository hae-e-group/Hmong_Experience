<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$program = array(
    'title' => '',
    'detail' => '',
    'image' => '',
    'duration' => '',
    'cost' => '',
    'start_date' => '',
    'overview' => '',
    'class' => 0);

$mode = 'create';

if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM program WHERE pk={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $program['title'] = $row['title'];
    $program['detail'] = $row['detail'];
    $program['image'] = $row['image'];
    $program['duration'] = $row['duration'];
    $program['cost'] = $row['cost'];
    $program['start_date'] = $row['start_date'];
    $program['class'] = $row['class'];
    $program['overview'] = $row['overview'];
    $mode = 'update';
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
    <!-- summer note -->
    <link href="../vendors/summernote/summernote.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php include ("include/top_navigation.php"); ?>

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
                                <h2>Program infomation <small><?= $mode ?> program information</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                      action="action/action_program.php" method="POST">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="title" required="required"
                                                   class="form-control col-md-7 col-xs-12" name="title" value="<?= $program['title'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="duration"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Duration</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="duration" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="duration" value="<?= $program['duration'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Cost</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="cost" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="cost" value="<?= $program['cost'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="start_date" class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="start_date" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="start_date" value="<?= $program['start_date'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="class"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Class</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="class" class="form-control" name="class">
                                                <option value="0">Choose option</option>
                                                <option value="1">One day class</option>
                                                <option value="2">Master class</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12">
                                        <label for="detail"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Detail</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="detail" name="detail"><?= $program['detail'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="overview"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Overview</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="overview" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="overview" value="<?= $program['overview'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="thumb"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12" id="image_div">
                                            <?php
                                            if ($program['image'] == '') {
                                                echo "<p class='form-control col-md-7 col-xs-12'>None</p>";
                                            } else {
                                                echo "<img src='../uploads/{$program['image']}' class='col-md-7 col-xs-12' />";
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                    <input type="hidden" name="image" id="image" value="<?= $program['image'] ?>"/>
                                    <input type="hidden" name="mode" value="<?= $mode ?>" />
                                </form>

                                <div class="form-group">
                                    <p class="control-label col-md-3 col-sm-3 col-xs-12 col-md-offset-2">Drag image
                                        file. Only single image supported.</p>
                                    <form action="request/upload_image.php" enctype="multipart/form-data"
                                          class="col-md-7 col-xs-12 col-md-offset-2 dropzone" id="fileDropzone"></form>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <br/>
                                        <button class="btn btn-primary" type="button"
                                                onclick="location.href='program.php'">Cancel
                                        </button>
                                        <?php
                                        if (isset($_GET['id'])) {
                                            echo '<button type="submit" class="btn btn-success">Update</button>';
                                            echo '<button type="button" class="btn btn-danger" id="delete_image">Delete Image</button>';
                                        } else {
                                            echo '<button type="button" class="btn btn-success">Submit</button>';
                                        }
                                        ?>
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
<!-- summer note -->
<script src="../vendors/summernote/summernote.js"></script>

<script type="text/javascript">
    var myDropzone = new Dropzone("#fileDropzone", {
        url: "action/upload_image.php",
        maxFiles: 1,
        acceptedFiles: 'image/*',
        error: function (file, response) {
            console.log(response);
        },
        success: function (file, response) {
            console.log(response);
            $('#image').val(response);

            $('#image_div').empty();
            $('#image_div').append("<img src='../uploads/" + response + "' class='col-md-7 col-xs-12' />");
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
        form_submit();
    });

    $('#delete_image').on('click', function () {
        $('#image').val('');
        form_submit();
    });

    function form_submit() {
        $('#demo-form2').submit();
    }

    $(document).ready(function () {
        $('#program_menu').append('<ul class="nav child_menu">' +
            '<li><a href="program_form.php">Program <?= $mode ?></a></li>' +
            '</ul>');

        $('#class').val(<?= $program['class'] ?>);

        $('#detail').summernote({
            height: 300,
        });
    });
</script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>