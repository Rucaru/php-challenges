<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calculateWallArea($width, $height)
    {
      return $width * $height;
    }
    function litresOfPaint($wallArea)
    {
      return $wallArea * 4;
    }

    echo litresOfPaint(calculateWallArea(5, 4));
    ?>
</body>
</html>