<?php
    include "mariadb.php";
    $id             = $_POST['id_siswa'];
    $name           = $_POST['nama_siswa'];
    $jeniskelamin   = $_POST['jenis_kelamin'];
    $alamat         = $_POST['alamat'];
    $hobi           = $_POST['hobi'];
    $mysqli         = "INSERT INTO tbl_siswa (id_siswa, nama_siswa, jenis_kelamin, alamat, hoby) VALUE ('$id', '$nama', '$jeniskelamin', '$alamat', '$hobi')";
    $result         = mysqli_query($conn, $mysqli);


    if ($result){

        echo"input berhasil";
    }
    else {

        echo"input gagal";
    }

    mysqli_close($conn);

?>
