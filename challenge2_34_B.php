<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is it a prime number?</title>
</head>
<body>
    <h1>Is your number a prime number?</h1>
    <form action="challenge2_34_B.php" method="post">
        <label for="">Input a number:</label>
        <input type="number" name="inputNumber">
        <button type="submit">Send</button>
    </form>
    <?php if (isset($_POST["inputNumber"])) {
      $userNumber = $_POST["inputNumber"];
      $prime = true;
      for ($i = 2; $i < $userNumber; $i++) {
        if ($userNumber % $i == 0) {
          echo "$userNumber is not a prime number";
          $prime = false;
          break;
        } elseif ($userNumber == 1 || $userNumber == 2) {
          echo "$userNumber is a prime number";
        }
      }
      if ($prime) {
        echo "$userNumber is a prime number";
      }
    } ?>
</body>
</html>