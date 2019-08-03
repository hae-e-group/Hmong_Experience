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
    'image' => mysqli_real_escape_string($conn, $_POST['image']),
    'skill' => mysqli_real_escape_string($conn, $_POST['skill']),
    'lecture' => mysqli_real_escape_string($conn, $_POST['lecture']),
);

$mode = mysqli_real_escape_string($conn, $_POST['mode']);

if ($mode == "create") {
    $sql = "
     INSERT INTO contact
      (name, org, about, facebook, instagram, image, skill)
      VALUES(
        '{$filtered['name']}',
        '{$filtered['org']}',
        '{$filtered['about']}',
        '{$filtered['facebook']}',
        '{$filtered['instagram']}',
        '{$filtered['image']}',
        '{$filtered['skill']}'
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
      image = '{$filtered['image']}',
      skill = '{$filtered['skill']}'
     WHERE pk = '{$filtered['pk']}'
    ";

} else if ($mode == "delete") {
    $sql = "
     DELETE from contact WHERE pk = {$filtered['pk']}
    ";
}

$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo $mode . ' error !!!1<br />';
    die (error_log(mysqli_error($conn)));
} else if ($mode == "delete") {
    die (json_encode(array("mode" => 'post', "id" => $_POST['id'])));
}

if ($mode == "create") {
    $filtered['pk'] = mysqli_insert_id($conn);
}

$result = mysqli_query($conn, "DELETE from lecturer WHERE contact_pk = {$filtered['pk']}");

if ($filtered['lecture'] != '') {
    $strTok = explode(',' , $filtered['lecture']);

    for ($i = 0; $i < count($strTok); $i++) {
        $result = mysqli_query($conn, "INSERT INTO lecturer (contact_pk, program_pk) VALUES ('{$filtered['pk']}', '{$strTok[$i]}')");
        if ($result === false) {
            echo $mode . ' error !!!2<br />';
            die (error_log(mysqli_error($conn)));
        }
    }
}

if ($result === false) {
    echo $mode . ' error !!!3<br />';
    die(error_log(mysqli_error($conn)));
} else if ($mode == "update" || $mode == "create") {
    echo $mode . ' success !!!';
    header("Location: ../contacts.php");
}