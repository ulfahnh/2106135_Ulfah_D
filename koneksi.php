<?php

$servername = "localhost";
$dbname = "2106135_ulfah";
$username = "root";
$password = "";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {

    die("Koneksi gagal:" . mysqli_connect_error());   
    }
    echo "Koneksi berhasil";

?>