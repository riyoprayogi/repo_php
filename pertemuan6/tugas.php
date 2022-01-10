<?php
// tugas
// mencari kasus = Daftar Manga
// baju, toko, mobil 
// isi data 10, 5 item 
// dengan gambar
// berserk, one pice, vagabond, grand blue, dan haikyuu

$manga = [
    [
        "judul" => "BERSERK",
        "score" => "9.42",
        "type" => "Manga",
        "genre" => "Action, Adventure, Drama, Fantasy, Horror, Supernatural",
        "dp" => "25 Aug 1989",
        "authors" => "Miura, Kentarou",
        "volumes" => "41",
        "chapters" => "380",
        "status" => "On Hiatus",
        "gambar" => "berserk.jpg"
    ],
    [
        "judul" => "One Piece",
        "score" => "9.17",
        "type" => "Manga",
        "genre" => " Action, Adventure, Comedy, Fantasy",
        "dp" => "22 Jul 1997",
        "authors" => "Oda, Eiichiro",
        "volumes" => "Unknown",
        "chapters" => "Unknown",
        "status" => "Publishing",
        "gambar" => "onepiece.jpg"
    ],
    [
        "judul" => "Vagabond",
        "score" => "9.15",
        "type" => "Manga",
        "genre" => "Action, Adventure, Drama",
        "dp" => "3 Sep 1998",
        "authors" => " Inoue, Takehiko, Yoshikawa, Eiji",
        "volumes" => "37",
        "chapters" => "327",
        "status" => "On Hiatus",
        "gambar" => "vagabond.jpg"
    ],
    [
        "judul" => "Grand Blue",
        "score" => "9.05",
        "type" => "Manga",
        "genre" => "Comedy, Slice of Life",
        "dp" => "7 Apr 2014",
        "authors" => "Inoue, Kenji, Yoshioka, Kimitake",
        "volumes" => "Unknown",
        "chapters" => "Unknown",
        "status" => "Publishing",
        "gambar" => "grandblue.jpg"
    ],
    [
        "judul" => "Haikyuu!!",
        "score" => "9.05",
        "type" => "Manga",
        "genre" => "Comedy, Drama, Sports",
        "dp" => "20 Feb 2012 to 20 Jul 2020",
        "authors" => "Furudate, Haruichi",
        "volumes" => "45",
        "chapters" => "407",
        "status" => "Finished",
        "gambar" => "haikyuu.jpg"
    ]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Manga</title>
</head>
<body>
    <h1>Daftar Manga</h1>
    <?php foreach ($manga as $m): ?>
        <ul>   
            <img src= "img/<?= $m["gambar"];?>"> 
            <h3><b><?= $m["judul"]?></b></h3>
            <li>Score: <?= $m["score"]?></li>
            <li>Type: <?= $m["type"]?></li>
            <li>Genre: <?= $m["genre"]?></li>
            <li>Date Publish: <?= $m["dp"]?></li>
            <li>Authors: <?= $m["authors"]?></li>
            <li>Volumes: <?= $m["volumes"]?></li>
            <li>Chapters: <?= $m["chapters"]?></li>
            <li>Status: <?= $m["status"]?></li>
            <br><hr>
        </ul>
    <?php endforeach; ?>
</body>
</html>