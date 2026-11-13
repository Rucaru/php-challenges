<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $teams = [
      "KOI" => "White",
      "G2" => "Red",
      "ACHO" => "Red",
      "GX" => "White",
      "KC" => "Blue",
      "FNC" => "Orange",
      "BDS" => "Blue",
      "XL" => "Blue",
    ];
    $tshirts = [];

    foreach ($teams as $key => $value) {
      echo "$key wears a $value T-shirt. <br>";
      if (isset($tshirts[$value])) {
        $tshirts[$value]++;
      } else {
        $tshirts[$value] = 1;
      }
    }

    foreach ($tshirts as $key => $value) {
      echo "$key colour is weared by $value teams.<br>";
    }

    $colours = [];

    // foreach ($teams as $key => $value) {
    //   if (isset($colours[$value])) {
    //     $colours[$value] .= ", $key";
    //   } else {
    //     $colours[$value] = $key;
    //   }
    // }
    foreach ($teams as $key => $value) {
      if (isset($colours[$value])) {
        $colours[$value][] = $key;
      } else {
        $colours[$value] = [$key];
      }
    }

    foreach ($colours as $key => $value) {
      for ($i = 0; $i < count($value); $i++) {
        if ($i == 0) {
          echo "$key is weared by " . $value[$i];
        } else {
          echo ", " . $value[$i];
        }
      }
      echo "<br>";
    }
    ?>
    
</body>
</html>