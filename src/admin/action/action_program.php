<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$filtered = array(
    'pk' => mysqli_real_escape_string($conn, $_POST['id']),
    'title' => mysqli_real_escape_string($conn, $_POST['title']),
    'detail' => mysqli_real_escape_string($conn, $_POST['detail']),
    'image' => mysqli_real_escape_string($conn, $_POST['image']),
    'duration' => mysqli_real_escape_string($conn, $_POST['duration']),
    'cost' => mysqli_real_escape_string($conn, $_POST['cost']),
    'start_date' => mysqli_real_escape_string($conn, $_POST['start_date']),
    'display' => mysqli_real_escape_string($conn, $_POST['display']),
    'class' => mysqli_real_escape_string($conn, $_POST['class'])
);

$mode = mysqli_real_escape_string($conn, $_POST['mode']);

if ($mode == "create") {
    $sql = "
     INSERT INTO program
      (title, detail, image, duration, cost, start_date, class)
      VALUES(
        '{$filtered['title']}',
        '{$filtered['detail']}',
        '{$filtered['image']}',
        '{$filtered['duration']}',
        '{$filtered['cost']}',
        '{$filtered['start_date']}',
        '{$filtered['class']}'
      )
    ";

} else if ($mode == "update") {
    $sql = "
     UPDATE program SET
      title = '{$filtered['title']}',
      detail = '{$filtered['detail']}',
      image = '{$filtered['image']}',
      duration = '{$filtered['duration']}',
      cost = '{$filtered['cost']}',
      start_date = '{$filtered['start_date']}',
      class = '{$filtered['class']}'
     WHERE pk = '{$filtered['pk']}'
    ";

} else if ($mode == "delete") {
    $sql = "
     DELETE from program WHERE pk = {$filtered['pk']}
    ";

} else if ($mode == "update_display") {
    $sql = "
     UPDATE program SET
      display = '{$filtered['display']}'
     WHERE pk = '{$filtered['pk']}'
    ";
}

$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo $sql;
    echo $mode.' error !!!';
    error_log(mysqli_error($conn));
} else if ($mode == "create" || $mode == "update") {
    echo $mode.' success !!!';
    header("Location: ../program.php");
} else if ($mode == "delete") {
    echo(json_encode(array("mode" => 'post', "id" => $_POST['id'])));
} else if ($mode == "update_display") {
    echo(json_encode(array("mode" => 'post', "id" => $_POST['id'], "display" => $_POST['display'])));
} else {
    echo $mode." error!!";
}
