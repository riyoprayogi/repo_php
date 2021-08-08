<?php
function salam($waktu = "Datang", $nama = "Admin") {
  $b = time();

  $hour = date("g", $b);
  $m    = date("A", $b);

  if ($m == "AM") {
    if ($hour == 12) {
      $waktu = "Evening";
    } elseif ($hour < 4) {
      $waktu = "Evening";
    } elseif ($hour > 3) {
      $waktu = "Morning";
    }
  }

      elseif ($m == "PM") {
    if ($hour == 12) {
      $waktu = "Afternoon";
    } elseif ($hour < 6) {
      $waktu = "Afternoon";
    } elseif ($hour > 5) {
      $waktu = "Evening";
    }
  }
  return "Good $waktu, $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test</title>
</head>
<body>
  <h1><?php echo salam("","Riyo!"); ?></h1>
</body>
</html>

