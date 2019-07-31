<?php
header("Content-Type: application/json");

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

$mode = mysqli_real_escape_string($conn, $_POST['mode']);

if ($mode == "create") {
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

} else if ($mode == "update") {
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

} else if ($mode == "delete") {
    $sql = "
     DELETE from contact WHERE pk = {$filtered['pk']}
    ";
}


$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo $mode . ' error !!!';
    error_log(mysqli_error($conn));
} else if ($mode == "update" || $mode == "create") {
    echo $mode . ' success !!!';
    header("Location: ../contacts.php");
} else if ($mode == "delete") {
    echo(json_encode(array("mode" => 'post', "id" => $_POST['id'])));
}
