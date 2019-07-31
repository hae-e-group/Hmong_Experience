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
                                    <li><a href="program_add.php">Program add</a></li>
                                </ul>
                            </li>
                            <li><a href="booking.php"><i class="fa fa-check"></i> Booking </span></a></li>
                            <li><a href="inbox.php"><i class="fa fa-envelope"></i> Inbox </span></a></li>
                            <li><a href="contacts.php"><i class="fa fa-instagram"></i> Contacts </span></a>
                                <ul class="nav child_menu">
                                    <li><a href="contacts_add.php">Contacts add</a></li>
                                </ul>
                            </li>
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
                                <h2>Program infomation <small>Please fill in forms</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br/>
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                                      action="request/create_contact.php" method="POST">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" name="name" required="required"
                                                   class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="org"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Organization</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="org" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="org">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="about"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">About</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="about" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="about">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook"
                                               class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="facebook" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="facebook">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram" class="control-label col-md-3 col-sm-3 col-xs-12">Instagram</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="instagram" class="form-control col-md-7 col-xs-12" type="text"
                                                   name="instagram">
                                        </div>
                                    </div>

                                    <input type="hidden" name="image" id="image" value=""/>

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
                                        <button type="button" class="btn btn-success">Submit</button>
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

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<script type="text/javascript">
    var myDropzone = new Dropzone("#fileDropzone", {
        url: "request/upload_image.php",
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
    });
</script>

</body>
</html>