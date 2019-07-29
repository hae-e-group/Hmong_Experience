<?php
ob_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$filtered = array(
    'name' => mysqli_real_escape_string($conn, $_POST['name']),
    'email' => mysqli_real_escape_string($conn, $_POST['email']),
    'subject' => mysqli_real_escape_string($conn, $_POST['subject']),
    'message' => mysqli_real_escape_string($conn, $_POST['message']),
);

$sql = "
 INSERT INTO inbox
  (name, email, subject, message)
  VALUES(
	'{$filtered['name']}',
	'{$filtered['email']}',
	'{$filtered['subject']}',
	'{$filtered['message']}'
  )
";

$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo 'insert error !!!';
    error_log(mysqli_error($conn));
} else {
    echo 'insert success !!!';
    header("Location: contact.html");
}

ob_end_flush();
?>