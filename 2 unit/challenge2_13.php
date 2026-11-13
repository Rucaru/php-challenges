<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive function to calculate factorial</title>
</head>
<body>
    <?php
    function factorial($number)
    {
      if ($number <= 1) {
        return 1;
      }
      return $number * factorial($number - 1);
    }
    echo factorial(5);
    ?>  
</body>
</html>