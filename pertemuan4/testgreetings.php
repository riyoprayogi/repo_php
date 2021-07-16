<?php
function salam($m, $nama = "Admin") {
  return "Selamat , $nama!";
}

    $b = time();

    $hour = date("g", $b);
    $m    = date("A", $b);

    if ($m == "AM") {
      if ($hour == 12) {
        echo "Good Evening!";
      } elseif ($hour < 4) {
        echo "Good Evening!";
      } elseif ($hour > 3) {
        echo "Good Morning!";
      }
    }

        elseif ($m == "PM") {
      if ($hour == 12) {
        echo "Good Afternoon!";
      } elseif ($hour < 6) {
        echo "Good Afternoon!";
      } elseif ($hour > 5) {
        echo "Good Evening!";
      }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?=salam("","Riyo"); ?></h1>
</body>
</html>