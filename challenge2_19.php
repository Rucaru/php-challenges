<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [1, 4, 3, 5, 7, 3, 9, 4, 4];

    for ($i = 0; $i < count($numbers); $i++) {
      $count = 0;
      for ($j = 0; $j < $i; $j++) {
        if ($numbers[$j] === $numbers[$i]) {
          $count++;
        }
      }
      if ($count == 1) {
        echo "The number " . $numbers[$i] . " is duplicated <br>";
      }
    }
    ?>
</body>
</html>