<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$sql = "SELECT * FROM book WHERE state = 0";
$result = mysqli_query($conn, $sql);


$booking_list = '';

$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $tr_class = $i++ % 2 == 0 ? "<tr class='even pointer'>" : "<tr class='odd pointer'>";

    $booking_list = $booking_list
        . $tr_class
        . "<td class='a-center '><input type='checkbox' data-id='{$row['pk']}' class='flat' name='table_records'></td>
		<td>{$row['name']}</td>
		<td>{$row['email']}</td>
		<td>{$row['phone']}</td>
		<td>{$row['date']} {$row['hour']} {$row['min']} {$row['a_p']}</td>
		<td>{$row['program']}</td>
		<td>{$row['guest']}</td>
		<td>{$row['language']}</td>
		<td class='last'>{$row['comment']}</td>
	  </tr>";

}


$sql = "SELECT * FROM book WHERE state = 1";
$result = mysqli_query($conn, $sql);


$accept_list = '';
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $tr_class = $i++ % 2 == 0 ? "<tr class='even pointer'>" : "<tr class='odd pointer'>";

    $accept_list = $accept_list
        . $tr_class
        . "<td class='a-center '><input type='checkbox' data-id='{$row['pk']}' class='flat' name='table_records'></td>
		<td>{$row['name']}</td>
		<td>{$row['email']}</td>
		<td>{$row['phone']}</td>
		<td>{$row['date']} {$row['hour']} {$row['min']} {$row['a_p']}</td>
		<td>{$row['program']}</td>
		<td>{$row['guest']}</td>
		<td>{$row['language']}</td>
		<td class='last'>{$row['comment']}</td>
	  </tr>
	";
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
                        <h3>Booking <small>Total booking list</small></h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Booking Request List <small>Accept or Decline </small></h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="pull-right">
                                <button type='button' class='btn btn-info' onclick="acceptBook();"><i
                                            class="fa fa-check"></i> Accept
                                </button>
                                <button type='button' class='btn btn-danger' onclick="declineBook('bulk_action1');"><i
                                            class="fa fa-trash"></i> Decline
                                </button>
                            </div>

                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action1">
                                        <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th>
                                            <th class="column-title">Name</th>
                                            <th class="column-title">Email</th>
                                            <th class="column-title">Phone</th>
                                            <th class="column-title">Date</th>
                                            <th class="column-title">Program</th>
                                            <th class="column-title">Guest</th>
                                            <th class="column-title">Language</th>
                                            <th class="column-title no-link last"><span class="nobr">Comment </span>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?= $booking_list ?>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Booking Accept List <small>You can decline request</small></h2>
                                <div class="clearfix"></div>
                            </div>

                            <div class="pull-right">
                                <button type='button' class='btn btn-danger' onclick="declineBook('bulk_action2');"><i
                                            class="fa fa-trash"></i> Decline
                                </button>
                            </div>

                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action2">
                                        <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th>
                                            <th class="column-title">Name</th>
                                            <th class="column-title">Email</th>
                                            <th class="column-title">Phone</th>
                                            <th class="column-title">Date</th>
                                            <th class="column-title">Program</th>
                                            <th class="column-title">Guest</th>
                                            <th class="column-title">Language</th>
                                            <th class="column-title no-link last"><span class="nobr">Comment </span>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?= $accept_list ?>
                                        </tbody>
                                    </table>
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
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom1.min.js"></script>

<script type="text/javascript">

    var checkState = '';

    $('.bulk_action1 input').on('ifChecked', function () {
        checkState = '';
        $(this).parent().parent().parent().addClass('selected');
        countChecked1();
    });
    $('.bulk_action1 input').on('ifUnchecked', function () {
        checkState = '';
        $(this).parent().parent().parent().removeClass('selected');
        countChecked1();
    });
    $('.bulk_action1 input#check-all').on('ifChecked', function () {
        checkState = 'all';
        countChecked1();
    });
    $('.bulk_action1 input#check-all').on('ifUnchecked', function () {
        checkState = 'none';
        countChecked1();
    });


    $('.bulk_action2 input').on('ifChecked', function () {
        checkState = '';
        $(this).parent().parent().parent().addClass('selected');
        countChecked2();
    });
    $('.bulk_action2 input').on('ifUnchecked', function () {
        checkState = '';
        $(this).parent().parent().parent().removeClass('selected');
        countChecked2();
    });
    $('.bulk_action2 input#check-all').on('ifChecked', function () {
        checkState = 'all';
        countChecked2();
    });
    $('.bulk_action2 input#check-all').on('ifUnchecked', function () {
        checkState = 'none';
        countChecked2();
    });


    function countChecked1() {
        if (checkState === 'all') {
            $(".bulk_action1 input[name='table_records']").iCheck('check');
        }
        if (checkState === 'none') {
            $(".bulk_action1 input[name='table_records']").iCheck('uncheck');
        }
    }

    function countChecked2() {
        if (checkState === 'all') {
            $(".bulk_action2 input[name='table_records']").iCheck('check');
        }
        if (checkState === 'none') {
            $(".bulk_action2 input[name='table_records']").iCheck('uncheck');
        }
    }

    function acceptBook() {
        var checkCount = $(".bulk_action1 input[name='table_records']:checked").length;
        if (checkCount) {
            var json = {id: [], mode: 1};
            $(".bulk_action1 input[name='table_records']:checked").each(function (index, item) {
                json['id'].push($(item).data("id"));
            });
            sendServer(json);
        } else {
            alert("check item");
        }
    }

    function declineBook(table) {
        var checkCount = $("." + table + " input[name='table_records']:checked").length;
        if (checkCount) {
            var json = {id: [], mode: 2};

            $("." + table + " input[name='table_records']:checked").each(function (index, item) {
                json['id'].push($(item).data("id"));
            });
            sendServer(json);
        } else {
            alert("check item");
        }
    }

    function sendServer(json) {
        console.log(json);
        $.ajax({
            type: "POST",
            url: "action/action_booking.php",
            data: json,
            dataType: "json",
            success: function (data, status, xhr) {
                console.log(data);
                //alert("Thank you!");
                window.location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
                //alert("Please check date");
            }
        });
    }
</script>

</body>
</html>