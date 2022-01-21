<?php
// Koneksi Database
$konek = mysqli_connect("127.0.0.1", "arul", "123456789", "web_programing");

if (!$konek) {
    echo "Error: Tidak dapat terhubung ke database." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sukses: Koneksi ke database berhasil terjalin." . PHP_EOL;
echo "Informasi Host: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>