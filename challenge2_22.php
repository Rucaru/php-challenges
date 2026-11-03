<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [5, 4, 7, 1, 3, 8, 1, 6, 3, 1, 8, 9, 1, 9];
    $count_numbers = [];
    foreach ($numbers as $number) {
      if (isset($count_numbers[$number])) {
        $count_numbers[$number] += 1;
      } else {
        $count_numbers[$number] = 1;
      }
    }
    foreach ($count_numbers as $key => $value) {
      echo "$key se repite $value veces <br>";
    }
    ?>
</body>
</html>