<?php
// strlen
// menghitung atau mengembalikan panjang string
// $str = "Riyo Rizky Prayogi";
// echo strlen($str); // 18

// strcmp
// untuk membandingkan sebuah string
// example
// $var1 = "Hello";
// $var2 = "hello";
// if (strcmp($var1, $var2) !== 0) {
//     echo "$var1 is not equal to $var2 in a case sensitive string comparison";
// }
// echo strcmp("5", "5"); // 0
// echo strcmp("Hello", "hello"); // -1
// echo strcmp("hello", "Hello"); // 1
// dari code di atas  dapat disimpulkan bahwa :
// mengembalikan nilai < 0 jika string1 kurang dari string2
// mengembalikan nilai > 0 jika string1 lebih besar dari string2
// mengembalikan nilai 0 jika keduanya sama

// explode
// Example 1.0
// Example 1
// $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
// $pieces = explode(" ", $pizza);
// echo $pieces[0]; // piece1
// echo $pieces[1]; // piece2
// Example 2
// $data = "foo:*:1023:1000::/home/foo:/bin/sh";
// list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
// echo $user; // foo
// echo $gecos;
// echo $pass; // *
// Lets Try
// $data = "Riyo:  :Rizky Prayogi:/bin/sh";
// list($nama_depan, $space1, $nama_back) = explode(":", $data);
// echo $nama_depan;
// echo $space1;
// echo $nama_back;

// Example 2.0
// $input1 = "hello";
// $input2 = "hello,there";
// $input3 = ",";
//  var_dump( explode( ",", $input1 ) );
//  var_dump( explode( ",", $input2 ) );
// var_dump( explode( ",", $input3 ) );

// Example 3.0
// $str = 'one|two|three|four';
// // positive limit
// print_r(explode('|', $str, 2));
// echo "<br>";
// // negative limit
// print_r(explode('|', $str, -1));

// htmlspecialchars
// example
// $new = htmlspecialchars("<a href='test'>Test</a>", ENT_NOQUOTES);
// echo $new;
?>