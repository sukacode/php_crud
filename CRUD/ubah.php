<?php

require 'functions.php';

//ambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiwa WHERE id = $id");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nobp">Nobp : </label>
                <input type="text" name="nobp" required value="">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for=" email">Email : </label>
                <input type="text" name="email">
            </li>
            <li>
                <label for=" jurusan">Jurusan : </label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for=" gambar">Gambar : </label>
                <input type="text" name="gambar">
            </li>
            <li>
                <button type=" submit" name="submit">Ubah Data!</button>
            </li>

        </ul>

    </form>

</body>

</html>