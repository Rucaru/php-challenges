<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $acho;
        echo $entrada ?? "No existe esa variable";
        if (!isset($acho)) {
          echo "Not initialised";
        }
        ?>
    </p>
</body>
</html>