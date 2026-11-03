<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [1, 8, 5, 3, 6, 9];
    $number = 7;
    $found = false;
    for ($i = 0; $i < count($numbers); $i++) {
      if ($numbers[$i] === $number) {
        echo "The number $number is in the position $i";
        $found = true;
        break;
      }
    }
    if ($found === false) {
      echo "The number $number is in the position -1";
    }
    ?>
</body>
</html>