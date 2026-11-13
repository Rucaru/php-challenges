<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <!-- Triangles and pyramids -->
     <pre>
     <?php
     $range = 9;
     echo "Triángulo<br>";
     for ($i = 1; $i <= $range; $i++) {
       for ($j = 0; $j < $i; $j++) {
         echo "#";
       }
       echo "<br>";
     }
     echo "Triángulo invertido<br>";
     for ($i = $range; $i > 0; $i--) {
       for ($j = 0; $j < $i; $j++) {
         echo "#";
       }
       echo "<br>";
     }
     echo "Pirámide<br>";
     $spaces = $range;
     for ($i = 1; $i <= $range; $i++) {
       $spaces--;
       for ($z = 0; $z < $spaces; $z++) {
         echo " ";
       }
       for ($j = 1; $j < $i; $j++) {
         if ($j === 1) {
           echo "#";
         } else {
           echo "##";
         }
       }
       echo "<br>";
     }

     echo "Pirámide invertida<br>";
     for ($i = 1; $i <= $range; $i++) {
       for ($j = 0; $j < $i; $j++) {
         echo "#";
       }
       echo "<br>";
     }
     for ($i = $range - 1; $i > 0; $i--) {
       for ($j = 0; $j < $i; $j++) {
         echo "#";
       }
       echo "<br>";
     }
     ?>
     </pre>
</body>
</html>