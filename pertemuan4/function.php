<?php
function salam($waktu, $nama = "Admin") {
    return "Selamat , $nama!";
}

$waktu = date("g:i:s A", time());
echo $waktu;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?=salam($waktu, "Riyo"); ?></h1>
</body>
</html>