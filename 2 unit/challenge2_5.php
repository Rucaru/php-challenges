<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ejercicio factorial -->
     <?php
     $x = 9;
     $resultado = 1;
     for ($i = 1; $i <= $x; $i++) {
       $resultado *= $i;
     }
     echo "Factorial de $x = $resultado";
     ?>
</body>
</html>