<?php
ob_start();
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
    'image' => mysqli_real_escape_string($conn, $_POST['image'])
);

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

$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo 'update error !!!';
    error_log(mysqli_error($conn));
} else {
    echo 'update success !!!';
    header("Location: program.php");
}

ob_end_flush();
?>