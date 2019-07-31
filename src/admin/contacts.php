<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

$contact_list = '';
while ($row = mysqli_fetch_array($result)) {
    $contact_list = $contact_list
        ."<div class='col-md-4 col-sm-4 col-xs-12 profile_details'>
            <div class='well profile_view'>
                <div class='col-sm-12'>
                    <h4 class='brief'><i>{$row['org']}</i></h4>
                    <div class='left col-xs-7'>
                        <h2>{$row['name']}</h2>
                        <p><strong>About: </strong> {$row['about']} </p>
                        <ul class='list-unstyled'>
                            <li><i class='fa fa-facebook'></i> Facebook: {$row['facebook']}</li>
                            <li><i class='fa fa-instagram'></i> Instagram: {$row['instagram']}</li>
                        </ul>
                    </div>
                    <div class='right col-xs-5 text-center'>
                        <img src='../uploads/{$row['image']}' alt='' class='img-circle img-responsive'>
                    </div>
                </div>
                <div class='col-xs-12 bottom text-center'>
        
                    <div class='col-xs-12 col-sm-6 emphasis'>
                        <button type='button' data-id='{$row['pk']}' class='btn btn-danger btn-xs btn_delete_h'><i
                                    class='fa fa-minus'>
                            </i> Delete </button>
        
                        <a href='contacts_edit.php?id={$row['pk']}' type='button' class='btn btn-primary btn-xs'><i
                                    class='fa fa-pencil'>
                            </i> Edit </a>
                    </div>
                </div>
            </div>
        </div>";
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
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php include("include/top_navigation.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Contacts Design</h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <a href="contacts_form.php" class="btn btn-primary btn-xs"><i class="fa fa-plus"> </i> Add contact</a>
                                    </div>

                                    <div class="clearfix"></div>

                                    <?= $contact_list; ?>

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

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<script type="text/javascript">
    $('.btn_delete_h').on('click', function() {
        var result = confirm('delete it?');
        if (result) {
            $.ajax({
                type: 'POST',
                url: 'action/action_contact.php',
                data: {id:$(this).data('id'), mode:'delete'},
                dataType: 'json',
                success: function(data, status, xhr) {
                    console.log(data);
                    alert('success');
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR.responseText);
                    alert('fail');
                }
            });
        }
        return false;
    });
</script>


</body>
</html>