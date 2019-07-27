<?php
header("Content-Type: application/json");


$conn = mysqli_connect(
'localhost',
'root',
'q1w2e3r4',
'hmong');

$filtered = array(
'name' => mysqli_real_escape_string($conn, $_POST['name']),
'email' => mysqli_real_escape_string($conn, $_POST['email']),
'phone' => mysqli_real_escape_string($conn, $_POST['phone']),
'date' => mysqli_real_escape_string($conn, $_POST['date']),
'hour' => mysqli_real_escape_string($conn, $_POST['hour']),
'min' => mysqli_real_escape_string($conn, $_POST['min']),
'a_p' => mysqli_real_escape_string($conn, $_POST['a_p']),
'program' => mysqli_real_escape_string($conn, $_POST['program']),
'guest' => mysqli_real_escape_string($conn, $_POST['guest']),
'language' => mysqli_real_escape_string($conn, $_POST['language']),
'comment' => mysqli_real_escape_string($conn, $_POST['comment']),
);

$sql = "
 INSERT INTO book
  (name, email, phone, date, hour, min, a_p, program, guest, language, comment)
  VALUES(
	'{$filtered['name']}',
	'{$filtered['email']}',
	'{$filtered['phone']}',
	'{$filtered['date']}',
	'{$filtered['hour']}',
	'{$filtered['min']}',
	'{$filtered['a_p']}',
	'{$filtered['program']}',
	'{$filtered['guest']}',
	'{$filtered['language']}',
	'{$filtered['comment']}'
  )
";

$result = mysqli_query($conn, $sql);
if ($result === false) {
	echo "fail!!!!";
} else {
	echo (json_encode($filtered));
}

?>