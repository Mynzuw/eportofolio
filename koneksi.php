<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "eportofolio";


//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//cek koneksi
if (!$conn) {
    die("Koneksi gagal");
}
?>