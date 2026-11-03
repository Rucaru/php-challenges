<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- By using the “for” statement, show the numbers from 7 to 14 (both included).

b) show the numbers in steps of two, that is, 7, 9, 11... -->
<?php
for ($i = 7; $i <= 14; $i++) {
  if ($i != 7) {
    echo ", ";
  }
  echo $i;
}
echo "<br>";
for ($i = 7; $i <= 14; $i++) {
  if ($i != 7) {
    echo ", ";
  }
  echo $i;
  $i++;
}
?>
</body>
</html>