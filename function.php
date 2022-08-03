<?php
// Koneksi dadtabase
$conn = mysqli_connect("localhost", "root","","arkatama");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi tambah
function tambah($data){
    global $conn;
    
        $nama = $data["NAME"];
        $age = $data["AGE"];
        $city= $data["CITY"];
    
        $query = "INSERT INTO user
                    VALUES
                  (null,'$nama','$age','$city')
                ";

        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
}

// Fungsi Hapus
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Fungsi UBAH
function ubah($data){
    global $conn;
    
        $id = $data["id"];
        $nama = htmlspecialchars($data["NAME"]);
        $age = htmlspecialchars($data["AGE"]);
        $city = htmlspecialchars($data["CITY"]);

    
        $query = "UPDATE user SET
                NAME ='$nama',
                AGE = '$age',
                CITY ='$city',
                ";

        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
}

?>




