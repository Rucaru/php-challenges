<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes chicken</title>
</head>
<body>
    <h1>Goya Chicken</h1>
    <form action="challenge2_34_C.php" method="post">
        <label for="">How many nuggets do you want?</label>
        <input type="number" name="input">
        <button type="button">Buy</button>
    </form>
    <?php if (isset($_POST["input"])) {
      $nuggets = $_POST["input"];
      $module = 0;

      for ($i = 0; $i < $nuggets; $i++) {
        if ($nuggets % 4 == 0) {
        }
      }
    } else {
      echo "Sorry you can't buy that number of nuggets.";
    } ?>
</body>
</html>