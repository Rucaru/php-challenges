<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>"Odd" number triangle</h1>
    <form action="challenge2_34_D.php" method="post">
        <label for="">Input an odd number of rows</label> <br>
        <input type="text" name="number"> <br>
        <button type="submit">Send</button>
    </form>
    <?php if (isset($_POST["number"]) && $_POST["number"] % 2 == 0) {
      for ($i = 1; $i <= $_POST["number"]; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          echo $j;
        }
        echo "<br>";
      }
    } else {
      echo "You have introduced a wrong number";
    } ?>
</body>
</html>