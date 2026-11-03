<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 13;
    $y = 13;
    if ($y > 0) {
      echo $y . " es positivo<br>";
    }
    if (!($x > $y)) {
      echo $x . " no es mayor que " . $y . "<br>";
    }

    if ($x < 0 && $y < 0) {
      echo "tanto $x como $y son negativos<br>";
    }

    if (($x === 13 || $y === 13) && !($x === 13 && $y === 13)) {
      echo "$x es trece o $y es trece<br>";
    }
    ?>
</body>
</html>