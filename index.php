<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Puskesmas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$namaErr = $jenisKelaminErr = $tanggalLahirErr = $nomorTeleponErr = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["nama"])) {
        $namaErr = "Nama harus diisi";
    } else {
        $nama = test_input($_POST["nama"]);
    }

    
    if (empty($_POST["jenis_kelamin"])) {
        $jenisKelaminErr = "Jenis Kelamin harus dipilih";
    } else {
        $jenis_kelamin = test_input($_POST["jenis_kelamin"]);
    }

    
    if (empty($_POST["tanggal_lahir"])) {
        $tanggalLahirErr = "Tanggal Lahir harus diisi";
    } else {
        $tanggal_lahir = test_input($_POST["tanggal_lahir"]);
    }

    if (empty($_POST["nomor_telepon"])) {
        $nomorTeleponErr = "Nomor Telepon harus diisi";
    } else {
        $nomor_telepon = test_input($_POST["nomor_telepon"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="proses_input.php">
<h1>Pendaftaran Puskesmas Online</h1>
    <label for="nama_pasien">Nama Pasien:</label>
    <input type="text" id="nama_pasien" name="nama_pasien">
    <span class="error">* <?php echo isset($namapasienErr) ? $namapasienErr : '';?></span>

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select id="jenis_kelamin" name="jenis_kelamin">
        <option value="" selected disabled>Pilih Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <span class="error">* <?php echo isset($jenisKelaminErr) ? $jenisKelaminErr : '';?></span>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir">
    <span class="error">* <?php echo isset($tanggalLahirErr) ? $tanggalLahirErr : '';?></span>

    <label for="alamat">alamat:</label>
    <input type="text" id="alamat" name="alamat">
    <span class="error">* <?php echo isset($alamatErr) ? $alamatErr : '';?></span>

    <label for="nomor_telepon">Nomor Telepon:</label>
    <input type="tel" id="nomor_telepon" name="nomor_telepon">
    <span class="error">* <?php echo isset($nomorTeleponErr) ? $nomorTeleponErr : '';?></span>

    <input type="submit" value="Daftar">
</form>

</body>
</html>
