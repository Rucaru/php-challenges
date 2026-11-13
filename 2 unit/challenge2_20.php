<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [1, 9, 3, 5, 8, 3, 9, 7, 0, 4];

    // for ($i = 0; $i < count($numbers); $i++) {
    //   $count = 0;
    //   for ($j = 0; $j < $i; $j++) {
    //     if ($numbers[$i] < $numbers[$j]) {
    //       $count++;
    //     }
    //   }
    //   if ($count == 0) {
    //     echo "The number " . $numbers[$i] . " is duplicated <br>";
    //   }
    // }
    $max = 0;
    for ($i = count($numbers) - 1; $i >= 0; $i--) {
      if ($numbers[$i] >= $max) {
        echo "The number $numbers[$i] is a builkiest. <br>";
        $max = $numbers[$i];
      }
    }
    ?>
</body>
</html>