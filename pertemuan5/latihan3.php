<?php
$mahasiswa = [
    ["Riyo Rizky Prayogi", "11201085", "Informatika", "11201085@student.itk.ac.id"],
    ["Fulan", "11201000", "Informatika", "11201000@student.itk.ac.id"], 
    ["Booker", "1120101", "Informatika", "11201001@student.itk,ac,id"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        .clear { clear: both; }
    </style>
</head>
<body>
<h1>Daftar Mahasiswa</h1>    
<?php foreach ($mahasiswa as $m) : ?>
    <ul>
        <li>Nama: <?= $m[0]; ?></li>
        <li>NIM:<?= $m[1]; ?></li>
        <li>Jurusan: <?= $m[2]; ?></li>
        <li>Email: <?= $m[3]; ?></li>
    </ul>
<?php endforeach ?>



</body>
</html>