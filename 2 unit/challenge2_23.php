<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lol_lec = [
      "KOI" => 1,
      "G2" => 10,
      "FNC" => 3,
      "KC" => 1,
      "GX" => 0,
    ];
    $input = "GX";
    if ($lol_lec[$input] != 0) {
      echo "$input has won " . $lol_lec[$input] . " lecs<br>";
    } else {
      echo "$input has not won any lec yet<br>";
    }
    ?>
</body>
</html>