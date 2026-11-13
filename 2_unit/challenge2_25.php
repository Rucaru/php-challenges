<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Name:</label>
        <input type="text" name="name"> 
        <label for="">Email:</label>
        <input type="email" name="email">
        <label for="">City:</label>
        <input type="text" name="city">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST["name"]) && $_POST["name"] == "") {
      echo "Te falta nombre <br>";
    }
    if (isset($_POST["email"]) && $_POST["email"] == "") {
      echo "Te falta email <br>";
    }
    if (isset($_POST["city"]) && $_POST["city"] == "") {
      echo "Te falta ciudad <br>";
    }
    ?>
</body>
</html>