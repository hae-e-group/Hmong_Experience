<?php
ob_start();
$conn = mysqli_connect(
'localhost',
'root',
'q1w2e3r4',
'hmong');

$filtered = array(
'title' => mysqli_real_escape_string($conn, $_POST['title']),
'contents' => mysqli_real_escape_string($conn, $_POST['contents']),
'detail' => mysqli_real_escape_string($conn, $_POST['detail']),
'price' => mysqli_real_escape_string($conn, $_POST['price']),
'time' => mysqli_real_escape_string($conn, $_POST['time']),
'video' => mysqli_real_escape_string($conn, $_POST['video']),
);

$sql = "
 INSERT INTO program
  (title, contents, detail, price, time, video)
  VALUES(
	'{$filtered['title']}',
	'{$filtered['contents']}',
	'{$filtered['detail']}',
	'{$filtered['price']}',
	'{$filtered['time']}',
	'{$filtered['video']}'
  )
";

$result = mysqli_query($conn, $sql);
if ($result === false) {
	echo 'insert error !!!';
	error_log(mysqli_error($conn));
} else {
	echo 'insert success !!!';
	header("Location: program.php");
}

ob_end_flush();
?>