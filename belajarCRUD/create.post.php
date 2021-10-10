<?php

include './connection.php';

$nama = $_POST['name'];
$alamat = $_POST['address'];

$sql = "
        insert into siswa (nama, alamat)
        values ('". $nama ."','". $alamat ."');
    ";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo 'Data added successfully </br>';

    echo '<button type="submit" action ="show.php"><a href="show.php">Go to home</a></button>';
} else {
    printf('Failed '.mysqli_errno($conn));
    exit();
}
