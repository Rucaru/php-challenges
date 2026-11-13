<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function with parameters</title>
</head>
<body>
    <?php
    function calculateNetPrice($grossPrice, $category)
    {
      if ($category == "general") {
        $finalPrice = $grossPrice * 1.21;
      } elseif ($category == "reduced") {
        $finalPrice = $grossPrice * 1.1;
      } elseif ($category == "super-reduced") {
        $finalPrice = $grossPrice * 1.04;
      } else {
        $finalPrice = $grossPrice;
      }
      return $finalPrice < 50 ? $finalPrice + 8 : $finalPrice;
    }

    echo calculateNetPrice(100, "reduced");
    ?>
</body>
</html>