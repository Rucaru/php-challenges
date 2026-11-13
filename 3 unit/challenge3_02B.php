<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Registration Wizard</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION["cycle"])) {
      $cycle = $_SESSION["cycle"];
    } else {
      $cycle = "";
    }
    if (isset($_SESSION["year"])) {
      $year = $_SESSION["year"];
    } else {
      $year = "";
    }
    if (isset($_SESSION["modules"])) {
      $modules = $_SESSION["modules"];
    } else {
      $modules = "";
    }
    ?>
    <h1>Studies</h1>
    <form action="challenge3_02C.php" method="post">
        <label for="">Cycle</label>
        <input name="cycle" type="text" value="<?= $cycle ?>">
        <label for="">Year</label>
        <input name="year" type="text" value="<?= $year ?>">
        <label for="">Modules</label>
        <input name="modules" type="text" value="<?= $modules ?>">
        <button type="submit">Next</button>
    </form>

<?php if (isset($_POST["name"])) {
  $_SESSION["name"] = $_POST["name"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["phone"] = $_POST["phone"];
} ?>
<form action="challenge3_02.php" method="get">
    <button type="submit">Go back</button>
</form>
</body>
</html>
