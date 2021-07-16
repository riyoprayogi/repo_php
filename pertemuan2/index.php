<?php 
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Stadar Output
// echo, print (digunakan untuk mencetak tulisan atau isi variabel)
// print_r
// var_dumb

// echo "Riyo Rizky Prayogi";
// print " Riyo";
//  print_r(" Rizky"); 
// var_dump("Terano")

// echo 123;
// echo true;
// echo false;
// Bisa menggunakan kutip 1 '', atay kutip 2 "", kutip 2 is mageic

// Penulisan sintaks
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// 1. Tidak boleh diawali angka, tapi boleh mengandung angka
// $nama = "Riyo Rizky Prayogi";
// // Interpolasi
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 50;
// $y = 30;
// echo $x / $y;

// Operator penggabung string / concatenation / concat
// .
// $nama_depan = "Riyo";
// $nama_belakang = "Rizky Prayogi";
// echo $nama_depan . " " . $nama_belakang;

// Operator Assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
// $nama = "Riyo";
// $nama .= " ";
// $nama .= "Rizky Prayogi";
// echo $nama;

// Operator Perbandingan
// <, >, <=, >=, ==. !=
// var_dump(1 < 5);
// var_dump(1 > 5);
// var_dump(1 <= 5);
// var_dump(1 >= 5);
// var_dump(1 == 5);
// var_dump(1 == "1");

// Operator identitas
// ===, !==
// var_dump(1 === "1");
// var_dump(1 !== "2");

// Operator logika
// && (and), || (or), ! (not)
// $x = 20;
// var_dump($x > 4 && $x % 2 == 0);
// var_dump($x < 5 || $x > 5);

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama ?></h1>
</body>
</html> -->