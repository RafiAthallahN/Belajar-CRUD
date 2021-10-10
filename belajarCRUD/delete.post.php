<?php

include './connection.php';

$id = $_GET['id'];

$sql = "
        delete from siswa
        where id = '". $id ."'
";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: show.php");
} else {
    printf('Failed '. mysqli_errno($conn));
    exit();
}

?>