<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $operation = "+";
    $operator1 = "";
    $operator2 = "";
    $result = "";
    if (isset($_POST["operation"])) {
      $operator1 = $_POST["operator1"];
      $operator2 = $_POST["operator2"];
      $operation = $_POST["operation"];
      if ($operation == "+") {
        $result = $operator1 + $operator2;
      } elseif ($operation == "-") {
        $result = $operator1 - $operator2;
      } elseif ($operation == "X") {
        $result = $operator1 * $operator2;
      } elseif ($operation == "/") {
        $result = $operator1 / $operator2;
      }
    }
    ?>
    <form action="challenge2_27v2.php" method="post">
        Calculator <br>
        <input name="operator1" value="<?= $operator1 ?>">
        <select name="operation" id="">
            <option>+</option>
            <option><?php if ($operation == "-") {
              echo "selected";
            } ?>-</option>
            <option><?php if ($operation == "X") {
              echo "selected";
            } ?>X</option>
            <option><?php if ($operation == "/") {
              echo "selected";
            } ?>/</option>
        </select> 
        <input name="operator2" value=" <?= $operator2 ?>">
        <input name="result" value=" <?= $result ?>">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>