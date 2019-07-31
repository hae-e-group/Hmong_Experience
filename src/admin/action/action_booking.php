<?php
header("Content-Type: application/json");

$conn = mysqli_connect(
'localhost',
'root',
'q1w2e3r4',
'hmong');

//$filtered = mysqli_real_escape_string($conn, $_POST['id']);
$filtered = $_POST['id'];
$mode = mysqli_real_escape_string($conn, $_POST['mode']);

$result = false;

foreach ($_POST['id'] as $value) {
	$filtered = mysqli_real_escape_string($conn, $value);
	$sql = "
	 UPDATE book SET
	  state = '{$mode}'
	 WHERE pk = '{$filtered}'
	";
	
	$result = mysqli_query($conn, $sql);
}

if ($result === false) {
	echo "fail!!!!";
} else {
	echo(json_encode(array("mode" => 'post', "id" => $_POST['id'], "display" => $_POST['display'])));;
}
?>