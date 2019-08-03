<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$sql = "SELECT * FROM inbox";
$result = mysqli_query($conn, $sql);

$email_list = '';
while ($row = mysqli_fetch_array($result)) {
    $message = '';
    if (mb_strlen($row['message'], 'utf-8') > 70) {
        $message = substr($row['message'], 0, 70)." ...";
    } else {
        $message = $row['message'];
    }

    $email_list = $email_list
        . "<a href='javascript:openMail({$row['pk']});'>
                <div class='mail_list'>
                    <div class='left'>
                        .
                    </div>
                    <div class='right'>
                        <h3>{$row['subject']} <small>{$row['create_time']}</small></h3>
                        <p>$message</p>
                    </div>
                </div>
            </a>";
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
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

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
                        <h3>Inbox Design <small>Some examples to get you started</small></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-3 mail_list_column">
                                        <button id="compose" class="btn btn-sm btn-success btn-block" type="button">
                                            COMPOSE
                                        </button>
                                        <?= $email_list; ?>
                                    </div>
                                    <!-- /MAIL LIST -->

                                    <!-- CONTENT MAIL -->
                                    <div class="col-sm-9 mail_view">
                                        <div class="inbox-body">
                                            <div class="mail_heading row">
                                                <div class="col-md-8">
                                                    <div class="btn-group">
                                                        <button class="btn btn-sm btn-primary" type="button"><i
                                                                    class="fa fa-reply"></i> Reply
                                                        </button>
                                                        <button class="btn btn-sm btn-default" type="button"
                                                                data-placement="top" data-toggle="tooltip"
                                                                data-original-title="Forward"><i
                                                                    class="fa fa-share"></i></button>
                                                        <button class="btn btn-sm btn-default" type="button"
                                                                data-placement="top" data-toggle="tooltip"
                                                                data-original-title="Print"><i class="fa fa-print"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-default" type="button"
                                                                data-placement="top" data-toggle="tooltip"
                                                                data-original-title="Trash"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                    </div>
                                                </div>
                                                <div id="create_time" class="col-md-4 text-right">
                                                </div>
                                                <div id="subject" class="col-md-12">
                                                </div>
                                            </div>
                                            <div class="sender-info">
                                                <div class="row">
                                                    <div id="name" class="col-md-12">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="message" class="view-mail">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /CONTENT MAIL -->
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

        <!-- compose -->
        <div class="compose col-md-6 col-xs-12">
            <div class="compose-header">
                New Message
                <button type="button" class="close compose-close">
                    <span>×</span>
                </button>
            </div>

            <div class="compose-body">
                <div id="alerts"></div>

                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                        </ul>
                    </div>

                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i
                                    class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a data-edit="fontSize 5">
                                    <p style="font-size:17px">Huge</p>
                                </a>
                            </li>
                            <li>
                                <a data-edit="fontSize 3">
                                    <p style="font-size:14px">Normal</p>
                                </a>
                            </li>
                            <li>
                                <a data-edit="fontSize 1">
                                    <p style="font-size:11px">Small</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i
                                    class="fa fa-strikethrough"></i></a>
                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i
                                    class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i
                                    class="fa fa-list-ol"></i></a>
                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i
                                    class="fa fa-dedent"></i></a>
                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i
                                    class="fa fa-align-left"></i></a>
                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i
                                    class="fa fa-align-center"></i></a>
                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i
                                    class="fa fa-align-right"></i></a>
                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i
                                    class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i
                                    class="fa fa-link"></i></a>
                        <div class="dropdown-menu input-append">
                            <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                            <button class="btn" type="button">Add</button>
                        </div>
                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                    </div>

                    <div class="btn-group">
                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i
                                    class="fa fa-picture-o"></i></a>
                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage"/>
                    </div>

                    <div class="btn-group">
                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                </div>

                <div id="editor" class="editor-wrapper"></div>
            </div>

            <div class="compose-footer">
                <button id="send" class="btn btn-sm btn-success" type="button">Send</button>
            </div>
        </div>
        <!-- /compose -->
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
<!-- bootstrap-wysiwyg -->
<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../vendors/google-code-prettify/src/prettify.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.inbox-body').hide();
    });

    function openMail(idx) {
        $('.inbox-body').hide();

        $.ajax({
            type: "POST",
            url : "action/get_inbox.php",
            data: { id : idx },
            dataType:"json",
            success : function(data, status, xhr) {
                console.log(data);
                append('#create_time', '<p class="date"> ' + data.create_time + '</p>');
                append('#subject', '<h4 > ' + data.subject + '</h4>');
                append('#name', '<strong>' + data.name + '</strong>');
                appendNoEmpty('#name', '<span>(' + data.email + ')</span> to');
                appendNoEmpty('#name', '<strong>me</strong>');
                appendNoEmpty('#name', '<a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>');
                append('#message', '<p >' + data.message + '</p>');

                $('.inbox-body').show();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
            }
        });
    }

    function append(target, content) {
        $(target).empty();
        $(target).append(content);
    }

    function appendNoEmpty(target, content) {
        $(target).append(content);
    }

</script>

</body>
</html>