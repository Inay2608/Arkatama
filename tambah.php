<?php
require 'function.php';

if (isset($_POST["submit"])){

    if(tambah($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal ditambahkan');
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
    <title>Tambah Data</title>
</head>
<body>
    <form action="" method="post">
    <ul>
        <li>
            <label for="NAME">NAME</label>
            <input type="text" name="NAME" id="NAME">
        </li>
        <li>
            <label for="AGE">AGE</label>
            <input type="text" name="AGE" id="AGE">
        </li>
        <li>
            <label for="CITY">CITY</label>
            <input type="text" name="CITY" id="CITY">
        </li>

        <button type="submit" name="submit">Tambah Data</button>

    </ul>
    </form>
</body>
</html>