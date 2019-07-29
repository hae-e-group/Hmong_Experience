<?php
ob_start();
$conn = mysqli_connect(
'localhost',
'root',
'q1w2e3r4',
'hmong');

$filtered = array(
    'name' => mysqli_real_escape_string($conn, $_POST['name']),
    'org' => mysqli_real_escape_string($conn, $_POST['org']),
    'about' => mysqli_real_escape_string($conn, $_POST['about']),
    'facebook' => mysqli_real_escape_string($conn, $_POST['facebook']),
    'instagram' => mysqli_real_escape_string($conn, $_POST['instagram']),
    'image' => mysqli_real_escape_string($conn, $_POST['image']),
);

$sql = "
 INSERT INTO contact
  (name, org, about, facebook, instagram, image)
  VALUES(
	'{$filtered['name']}',
	'{$filtered['org']}',
	'{$filtered['about']}',
	'{$filtered['facebook']}',
	'{$filtered['instagram']}',
	'{$filtered['image']}'
  )
";

$result = mysqli_query($conn, $sql);
if ($result === false) {
	echo 'insert error !!!';
	error_log(mysqli_error($conn));
} else {
	echo 'insert success !!!';
	header("Location: contacts.php");
}

ob_end_flush();
?>