<?php
header("Content-Type: application/json");


$conn = mysqli_connect(
'localhost',
'root',
'q1w2e3r4',
'hmong');

$filtered = array(
'pk' => mysqli_real_escape_string($conn, $_POST['id']),
'display' => mysqli_real_escape_string($conn, $_POST['display']),
);

$sql = "
 UPDATE program SET
  display = '{$filtered['display']}'
 WHERE pk = '{$filtered['pk']}'
";

$result = mysqli_query($conn, $sql);
if ($result === false) {
	echo "fail!!!!";
} else {
	echo(json_encode(array("mode" => 'post', "id" => $_POST['id'], "display" => $_POST['display'])));;
}

?>