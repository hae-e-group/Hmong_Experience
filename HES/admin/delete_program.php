<?php
header("Content-Type: application/json");


$conn = mysqli_connect(
'localhost',
'root',
'q1w2e3r4',
'hmong');

$filtered = mysqli_real_escape_string($conn, $_POST['id']);

$sql = "
 DELETE from program WHERE pk = {$filtered}
";

$result = mysqli_query($conn, $sql);
if ($result === false) {
	echo "fail!!!!";
} else {
	echo(json_encode(array("mode" => 'post', "id" => $_POST['id'])));;
}

?>