<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Create two variables to store two numbers.

By using the if..else statements, show a message on screen telling if the first number is smaller than, equal to or greater than the second one. -->
    <?php
    $x = 5;
    $y = 8;
    echo "x is $x <br>";
    echo "y is $y <br>";
    if ($x > $y) {
      echo "x is greather than y";
    } elseif ($x === $y) {
      echo "x is equal to y";
    } else {
      echo "x is lesser than y";
    }
    ?>
    
</body>
</html>