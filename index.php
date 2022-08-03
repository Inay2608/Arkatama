<?php
require 'function.php';
$user = query("SELECT * FROM user");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h1>Daftar Nama Peserta Intership Arkatama</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table cellpadding="15" cellspacing="0" border="1">
        
            <tr>
                <th>No.</th>
                <th>AKSI</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>CITY</th>
            </tr>
  
        <?php $i = 1 ;?>
        <?php foreach($user as $row):?>
        <tr>
            <td><?php echo $i?></td>
            <td>
                <a href="ubah.php?id=<?php echo $row["id"];?>">UBAH</a>
                <a href="hapus.php?id=<?php echo $row["id"];?>">HAPUS</a>
            </td>
            <td><?php echo $row["NAME"];?></td>
            <td><?php echo $row["AGE"];?></td>
            <td><?php echo $row["CITY"];?></td>
        </tr>
        <?php $i++ ;?>
        <?php endforeach ;?>
    </table>
</body>
</html>