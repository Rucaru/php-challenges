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
    if (isset($_GET["confirmed"])) {
      $_SESSION = [];
      session_destroy();
    }

    if (isset($_SESSION["name"])) {
      $name = $_SESSION["name"];
    } else {
      $name = "";
    }
    if (isset($_SESSION["email"])) {
      $email = $_SESSION["email"];
    } else {
      $email = "";
    }
    if (isset($_SESSION["phone"])) {
      $phone = $_SESSION["phone"];
    } else {
      $phone = "";
    }
    ?>
    <h1>Personal data</h1>
    <form action="challenge3_02B.php" method="post">
        <label for="">Name</label>
        <input name="name" type="text" value="<?= $name ?>">
        <label for="">Email</label>
        <input name="email" type="text" value="<?= $email ?>">
        <label for="">Phone</label>
        <input name="phone" type="text" value="<?= $phone ?>">
        <button type="submit">Next</button>
    </form>
</body>
</html>
