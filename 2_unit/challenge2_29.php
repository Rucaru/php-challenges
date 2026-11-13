<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="challenge2_29.php" method="post">
        <p>Name: <input type="text" name="name"> </p>
        <p>Email: <input type="email" name="email"> </p>
        <p>Age: <input type="number" name="age"> </p>
        <button type="submit">Send</button>
    </form>
    <?php
    if (isset($_POST["name"]) && $_POST["name"] == "") {
      echo "The name is empty";
    }
    if (
      !isset($_POST["email"]) ||
      !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
    ) {
      echo "This email is not a valid address";
    }
    if (
      !isset($_POST["age"]) ||
      !filter_var($_POST["age"], FILTER_VALIDATE_INT)
    ) {
      echo "This age is not a valid age";
    }
    ?>
    
</body>
</html>