<?php
header("Content-Type: application/json");

$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$filtered = array (
    'pk' => mysqli_real_escape_string($conn, $_POST['id'])
);

$sql = "SELECT p.title, p.pk FROM lecturer l left join program p on p.pk = l.program_pk where contact_pk = {$filtered['pk']}";

$arr = array();

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    array_push($arr, array(
        'title' => $row['title'],
        'pk' => $row['pk']
    ));
}

if ($result === false) {
    echo "fail!!!!";
} else {
    echo(json_encode($arr));
}


