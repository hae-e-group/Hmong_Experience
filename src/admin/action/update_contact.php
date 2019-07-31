<?php
ob_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    'q1w2e3r4',
    'hmong');

$filtered = array(
    'pk' => mysqli_real_escape_string($conn, $_POST['id']),
    'name' => mysqli_real_escape_string($conn, $_POST['name']),
    'org' => mysqli_real_escape_string($conn, $_POST['org']),
    'about' => mysqli_real_escape_string($conn, $_POST['about']),
    'facebook' => mysqli_real_escape_string($conn, $_POST['facebook']),
    'instagram' => mysqli_real_escape_string($conn, $_POST['instagram']),
    'image' => mysqli_real_escape_string($conn, $_POST['image'])
);

$sql = "
 UPDATE contact SET
  name = '{$filtered['name']}',
  org = '{$filtered['org']}',
  about = '{$filtered['about']}',
  facebook = '{$filtered['facebook']}',
  instagram = '{$filtered['instagram']}',
  image = '{$filtered['image']}'
 WHERE pk = '{$filtered['pk']}'
";

$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo 'update error !!!';
    error_log(mysqli_error($conn));
} else {
    echo 'update success !!!';
    header("Location: contacts.php");
}

ob_end_flush();
?>