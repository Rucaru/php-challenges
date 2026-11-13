<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function enterNumber($number)
    {
      return $number > 0 ? $number : 0;
    }
    function calculateArea($a, $b)
    {
      return $a * $b;
    }
    echo enterNumber(5) . "<br>";
    echo enterNumber(-100) . "<br>";
    echo calculateArea(3, 2) . "<br>";
    ?>
</body>
</html>