<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Registration Wizard</title>
</head>
<h1>Review</h1>
<body>
    <?php
    session_start();
    if (isset($_POST["cycle"])) {
      $_SESSION["cycle"] = $_POST["cycle"];
      $_SESSION["year"] = $_POST["year"];
      $_SESSION["modules"] = $_POST["modules"];
      echo "Your name is " . $_SESSION["name"] . "<br>";
      echo "Your email is " . $_SESSION["email"] . "<br>";
      echo "Your phone is " . $_SESSION["phone"] . "<br>";
      echo "Your cycle is " . $_SESSION["cycle"] . "<br>";
      echo "Your year is " . $_SESSION["year"] . "<br>";
      echo "Your modules is " . $_SESSION["modules"] . "<br>";
    }
    ?>
    <form action="challenge3_02.php?confirmed" method="POST">
        <button type="submit">Confirm</button>
    </form>
    <form action="challenge3_02B.php" method="get">
        <button type="submit">Go back</button>
    </form>

</body>
</html>
