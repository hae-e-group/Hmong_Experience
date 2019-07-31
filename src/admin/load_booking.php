<?php
header("Content-Type: application/json");

$conn = mysqli_connect(
'localhost',
'root',
'q1w2e3r4',
'hmong');

$sql = "
SELECT 
 name, email, phone, date, hour, min, a_p, guest, language, comment, title
 from book b 
 left join program p on b.program = p.pk
";

$arr = array();

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
    array_push($arr, array(
        'name' => $row['name'],
        'email' => $row['email'],
        'phone' => $row['phone'],
        'start' => $row['date'].' '.$row['hour'].':'.$row['min'].' '.$row['a_p'],
        'guest' => $row['guest'],
        'language' => $row['language'],
        'comment' => $row['comment'],
        'title' => $row['title'],
    ));
}
if ($result === false) {
	echo "fail!!!!";
} else {
	echo(json_encode($arr));
}
?>
