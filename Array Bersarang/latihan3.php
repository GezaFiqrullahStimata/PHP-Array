<?php
$mahasiswa = [
    [
        "nim" => '11223344',
        "nama" => "Geza-Kim",
        "jurusan" => "Sistem Informasi",
        "email" => "geza@gmail.com",
        "gambar" => "gessa.jpg"
    ],
    [
        "nim" => '55667788',
        "nama" => "Gessa-Hyung",
        "jurusan" => "Teknologi Informasi",
        "email" => "gessa@gmail.com",
        "gambar" => "geza.jpg"
    ],

]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa Stimata</h1>
    <?php foreach ($mahasiswa as $mhs) :?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>