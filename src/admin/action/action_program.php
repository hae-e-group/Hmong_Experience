<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$filtered = array(
    'pk' => mysqli_real_escape_string($conn, $_POST['id']),
    'title' => mysqli_real_escape_string($conn, $_POST['title']),
    'contents' => mysqli_real_escape_string($conn, $_POST['contents']),
    'detail' => mysqli_real_escape_string($conn, $_POST['detail']),
    'price' => mysqli_real_escape_string($conn, $_POST['price']),
    'time' => mysqli_real_escape_string($conn, $_POST['time']),
    'video' => mysqli_real_escape_string($conn, $_POST['video']),
    'image' => mysqli_real_escape_string($conn, $_POST['image']),
    'display' => mysqli_real_escape_string($conn, $_POST['display'])
);

$mode = mysqli_real_escape_string($conn, $_POST['mode']);

if ($mode == "create") {
    $sql = "
     INSERT INTO program
      (title, contents, detail, price, time, video, image)
      VALUES(
        '{$filtered['title']}',
        '{$filtered['contents']}',
        '{$filtered['detail']}',
        '{$filtered['price']}',
        '{$filtered['time']}',
        '{$filtered['video']}',
        '{$filtered['image']}'
      )
    ";

} else if ($mode == "update") {
    $sql = "
     UPDATE program SET
      title = '{$filtered['title']}',
      contents = '{$filtered['contents']}',
      detail = '{$filtered['detail']}',
      price = '{$filtered['price']}',
      time = '{$filtered['time']}',
      video = '{$filtered['video']}',
      image = '{$filtered['image']}'
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
