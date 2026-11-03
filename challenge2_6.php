<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- a) Show the numbers from 1 to 100 that which are multiple of 4 (4, 8, 12, 16…).

b) Modify the previous exercise to show the multiples of 4 that are not multiple of 5. -->
<?php for ($i = 4; $i <= 100; $i += 4) {
  if ($i % 5 != 0) {
    echo "$i<br>";
  }
} ?>
</body>
</html>