<?php 
// $mahasiswa = [
//     ["Riyo Rizky Prayogi", "11201085", "Informatika", "11201085@student.itk.ac.id"],
//     ["Fulan", "11201000", "Informatika", "11201000@student.itk.ac.id"], 
//     ["Booker", "1120101", "Informatika", "11201001@student.itk,ac,id"]
// ]

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya ada string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Riyo Rizky Prayogi", 
        "nim" => "11201085",
        "jurusan" => "Informatika",
        "email" => "11201085@student.itk.ac.id",
        "gambar" => "rsz_lazy.png"
    ],
    [
        "nama" => "Booker", 
        "nim" => "11201080",
        "jurusan" => "Informatika",
        "email" => "11201080@student.itk.ac.id",
        "gambar" => "rsz_noble.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama:<?= $mhs["nama"]?></li>
        <li>NIM:<?= $mhs["nim"] ?></li>
        <li>Jurusan:<?= $mhs["jurusan"]?></li>
        <li>Email:<?= $mhs["email"]?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>