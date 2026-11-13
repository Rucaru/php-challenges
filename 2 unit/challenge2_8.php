<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $guess = rand(1, 10);
    $secretNumber = 4;
    while ($guess != $secretNumber) {
      if ($guess < $secretNumber) {
        echo "$guess is higher! <br>";
      } else {
        echo "$guess is lower!<br>";
      }
      $guess = rand(1, 10);
    }
    echo "You are right! The number was $guess <br>";
    ?>
</body>
</html>