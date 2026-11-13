<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [5, 6, 7, 4, 8, 1];
    $secondNumbers = $numbers;
    $inversedNumbers = [];
    foreach ($numbers as $n) {
      echo $n . "<br>";
    }

    foreach ($secondNumbers as $n) {
      echo $n . "<br>";
    }

    for ($i = count($numbers) - 1; $i >= 0; $i--) {
      $inversedNumbers[] = $numbers[$i];
      echo $numbers[$i] . "<br>";
    }
    ?>
</body>
</html>