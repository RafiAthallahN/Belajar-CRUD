<?php include'./connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO WORLD</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vero distinctio fuga exercitationem minus quia maxime aperiam, praesentium quaerat harum accusamus molestias nesciunt ipsa nostrum quibusdam ipsum qui ad quae?</p>
    <button action="./create.php">Create</button>

    <hr>

    <?php
        $sql = 'select * from siswa';
        $result = mysqli_query($conn, $sql);
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['alamat']?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id'] ?>">Edit</a>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $data['id'] ?>">Delete</a>
                    </td>
                </tr>
                
            <?php } ?>
        </tbody>
    </table>
</body>
</html>