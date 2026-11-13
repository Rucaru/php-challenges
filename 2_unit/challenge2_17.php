<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marks = [8, 9, 7, 10, 6];
    $sum = 0;

    foreach ($marks as $mark) {
      $sum += $mark;
    }

    $avg = $sum / count($marks);

    echo "Average = $avg" . "<br>";
    echo "Minimum = " . min($marks) . "<br>";
    echo "Maximum = " . max($marks) . "<br>";
    ?>
</body>
</html>