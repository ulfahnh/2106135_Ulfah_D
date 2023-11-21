<?php

include('koneksi.php');


$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];


$query = "INSERT INTO data_pendaftaran_puskesmas (nama_pasien, jenis_kelamin, tanggal_lahir, alamat, nomor_telepon) VALUES ('$nama_pasien', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$nomor_telepon')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

?>