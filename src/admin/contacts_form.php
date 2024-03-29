<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$contact = array(
    'name' => '',
    'org' => '',
    'about' => '',
    'facebook' => '',
    'instagram' => '',
    'image' => '',
    'skill' => '',
    'brief' => '',
    'ti_name' => '',
    'ti_about' => '');

$mode = 'create';

if (isset($_GET['id'])) {
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM contact WHERE pk={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $contact['name'] = $row['name'];
    $contact['org'] = $row['org'];
    $contact['about'] = $row['about'];
    $contact['facebook'] = $row['facebook'];
    $contact['instagram'] = $row['instagram'];
    $contact['image'] = $row['image'];
    $contact['skill'] = $row['skill'];
    $contact['brief'] = $row['brief'];
    $contact['ti_name'] = $row['ti_name'];
    $contact['ti_about'] = $row['ti_about'];
    $mode = 'update';
}

$result = mysqli_query($conn,"SELECT * FROM program");
$project_list = '';
while ($row = mysqli_fetch_array($result)) {
    $project_list = $project_list."<option value='{$row["pk"]}'>{$row["title"]}</option>";
}

$lecture_result = '';
if (isset($_GET['id'])) {
    $result = mysqli_query($conn, "SELECT program_pk FROM lecturer WHERE contact_pk = '{$_GET['id']}'");

    $first = true;

    while ($row = mysqli_fetch_array($result)) {
        if ($first) {
            $first = false;
        } else {
            $lecture_result = $lecture_result.",";
        }
        $lecture_result = $lecture_result.$row['program_pk'];
    }
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
                                <h2>Contact infomation <small>Please fill in forms</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                      action="action/action_contact.php" method="POST">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" required="required"
                                                   class="form-control col-md-7 col-xs-12" name="name" value="<?= $contact['name'] ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="org"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Organization</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="org" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="org" value="<?= $contact['org'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="brief"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Brief</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="brief" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="brief" value="<?= $contact['brief'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="about"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">About</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="about" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="about" value="<?= $contact['about'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="facebook" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="facebook" value="<?= $contact['facebook'] ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram" class="control-label col-md-3 col-sm-3 col-xs-12">Instagram</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="instagram" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="instagram" value="<?= $contact['instagram'] ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="skill" class="control-label col-md-3 col-sm-3 col-xs-12">Skill</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="skill" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="skill" value="<?= $contact['skill'] ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="class"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Class</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="class" class="form-control">
                                                <?= $project_list ?>
                                            </select>
                                        </div>

                                        <button type="button" id="class_add" class="btn btn-primary">Add</button>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lecture List</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input id="tags_1" type="text" class="tags form-control" />
                                            <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ti_name" class="control-label col-md-3 col-sm-3 col-xs-12">Ti_Name</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="ti_name" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="ti_name" value="<?= $contact['ti_name'] ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ti_about" class="control-label col-md-3 col-sm-3 col-xs-12">Ti_about</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="ti_about" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="ti_about" value="<?= $contact['ti_about'] ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="thumb"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12" id="image_div">
                                            <?php
                                            if ($contact['image'] == '') {
                                                echo "<p class='form-control col-md-7 col-xs-12'>None</p>";
                                            } else {
                                                echo "<img src='../uploads/{$contact['image']}' class='col-md-7 col-xs-12' />";
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <input type="hidden" name="mode", value="<?= $mode ?>">
                                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                    <input type="hidden" name="image" id="image" value="<?= $contact['image'] ?>" />
                                    <input type="hidden" name="lecture" id="lecture">

                                </form>

                                <div class="form-group">
                                    <p class="control-label col-md-5 col-sm-5 col-xs-12 col-md-offset-2">Drag image
                                        file. Only single image supported.</p>
                                    <form action="request/upload_image.php" enctype="multipart/form-data"
                                          class="col-md-7 col-xs-12 col-md-offset-2 dropzone" id="fileDropzone"></form>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <br/>
                                        <button class="btn btn-primary" type="button"
                                                onclick="location.href='contacts.php'">Cancel
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
<!-- Dropzone.js -->
<script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- jQuery Tags Input -->
<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<script type="text/javascript">
    $('#contacts_menu').append('<ul class="nav child_menu">' +
        '<li class="current-page"><a href="contacts_form.php">Contacts <?= $mode ?></a></li>' +
        '</ul>');

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
        submit();
    });

    $('#delete_image').on('click', function () {
        $('#image').val('');
        submit();
    });



    $('#class_add').on('click', function() {
        $('.tags').addTag($("#class option:selected").text());
    });

    function submit() {
        var split = $('.tags').val().split(',');

        var seen = {};
        for (var i in split) {
            $('#class option').each(function () {
                var txt = $(this).text();
                if (split[i] === txt) {
                    seen[txt] = $(this).val();
                }
            });
        }
        var classResult = '';
        var first = true;
        $.each(seen, function (key, value) {
            if (first) {
                first = false;
            } else {
                classResult += ',';
            }
            classResult += value;
        });
        console.log(classResult);
        $('#lecture').val(classResult);
        $('#demo-form2').submit();
    }


    $(document).ready(function () {
        var lecture_list = '<?= $lecture_result ?>'.split(',');
        for (var i in lecture_list) {
            $('.tags').addTag($("#class [value=" + lecture_list[i] + "]").text());
        }
    });

</script>

</body>
</html>