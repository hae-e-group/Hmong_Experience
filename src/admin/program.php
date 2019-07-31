<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$sql = "SELECT * FROM program";
$result = mysqli_query($conn, $sql);

$program_list = '';
while ($row = mysqli_fetch_array($result)) {
    $program_list = $program_list
        . "<tr><td>#</td>
	<td><a>{$row['title']}</a><br /><small>{$row['create_time']}</small></td>
	<td><a>{$row['contents']}</a></td>";

    if ($row['display'] == "1") {
        $program_list = $program_list . "<td><button type='button' data-id='{$row['pk']}' class='btn btn-success btn-xs btn_display_h'>Show</button></td>";
    } else {
        $program_list = $program_list . "<td><button type='button' data-id='{$row['pk']}' class='btn btn-danger btn-xs btn_display_h'>Hide</button></td>";
    }

    $program_list = $program_list
        . "<td><a href='program_form.php?id={$row['pk']}' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i> Edit </a>"
        . "<button type='button' data-id='{$row['pk']}' class='btn btn-danger btn-xs btn_delete_h'><i class='fa fa-trash-o'></i> Delete </button></td></tr>";

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
                        <h3>Program <small>add/edit program</small></h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Projects</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <a href="program_form.php" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add
                                </a>

                                <!-- start project list -->
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 1%">#</th>
                                        <th style="width: 20%">Program Name</th>
                                        <th>Contents</th>
                                        <th>Display</th>
                                        <th style="width: 20%">#Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?= $program_list ?>
                                    </tbody>
                                </table>
                                <!-- end project list -->

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

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<!-- Hong -->
<script src="../build/js/hong.js"></script>
</body>
</html>