<?php include './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="edit.post.php" method="post">

    <?php
        $sql = 'select * from siswa where id = '. $_GET['id'];
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
    ?>

    <div>
        <table> 
            <div>
            <tr>
            <td><span>Nama : </span></td>
            <td><input type="text" name="name" value="<?php echo $data['name']?>"></td>
        </tr>  
    </div>
    <div>
        <tr>
            <td><span>Alamat : </span></td>
            <td><input type="text" name="address" value="<?php echo $data['address']?>"></td>
        </tr> 
        </div> 
    </table>
       
    </div>
    <div>
        <button type="submit">
            Submit
        </button>
    </div>
    </form>
</body>
</html>