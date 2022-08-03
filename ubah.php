<?php
require 'function.php';

$id = $_GET["id"];

// Ambil data binatang berdasarkan id
$user = query("SELECT * FROM user WHERE id = $id")[0];

if (isset($_POST["submit"])){

    if(ubah($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal diubah');
                document.location.href='index.php';
            </script>
            ";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>
<body>
    <h1>Daftar Nama Peserta Intership Arkatama</h1>
    <form action="" method="post">
     <input type="hidden" name="id" value="<?php echo $user["id"];?>">
    <ul>
        <li>
            <label for="NAME">NAME</label>
            <input type="text" name="NAME" id="NAME" value="<?php echo $user["NAME"];?>">
        </li>
        <li>
            <label for="AGE">AGE</label>
            <input type="text" name="AGE" id="AGE" value="<?php echo $user["AGE"];?>">
        </li>
        <li>
            <label for="CITY">CITY</label>
            <input type="text" name="CITY" id="CITY" value="<?php echo $user["CITY"];?>">
        </li>
        <button type="submit" name="submit">Ubah Data</button>
    </ul>
    </form>
</body>
</html>