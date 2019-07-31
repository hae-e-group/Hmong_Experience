<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');


$filtered = array(
    'pk' => mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "SELECT * FROM inbox WHERE pk = {$filtered['pk']}";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

$arr_result = array(
    'name' => $row['name'],
    'email' => $row['email'],
    'subject' => $row['subject'],
    'message' => $row['message'],
    'create_time' => $row['create_time'],
);
die(json_encode($arr_result));
?>