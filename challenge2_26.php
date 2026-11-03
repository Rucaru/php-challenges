<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    <select name="countries[]" multiple>
        <option value="Germany">Germany</option>
        <option value="Portugal">Portugal</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="France">France</option>
    </select>
    <button type="submit">Enviar</button>
    </form>
    <form action="" method="post">
    <select name="countries[]" multiple>
        <option value="Germany">Germany</option>
        <option value="Portugal">Portugal</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="France">France</option>
    </select>
    <button type="submit">Enviar</button>
    </form>
    
    <?php if (isset($_GET["countries"])) {
      $countries = $_GET["countries"];
      foreach ($countries as $country) {
        echo "Has seleccionado $country <br>";
      }
    } ?>
</body>
</html>