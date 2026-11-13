<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
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
      if (!is_numeric($operator1) || !is_numeric($operator2)) {
        $result = "Error: introduce números";
      } elseif ($operation == "+") {
        $result = $operator1 + $operator2;
      } elseif ($operation == "-") {
        $result = $operator1 - $operator2;
      } elseif ($operation == "X") {
        $result = $operator1 * $operator2;
      } elseif ($operation == "/") {
        $result =
          $operator2 == 0 ? "Error: división por 0" : $operator1 / $operator2;
      }
    }
    ?>
    <form action="challenge2_27v2.php" method="post">
        Calculator <br>
        <input name="operator1" id="operator1" value="<?= htmlspecialchars(
          $operator1,
        ) ?>">
        <select name="operation" id="operation">
            <?php foreach (["+", "-", "X", "/"] as $op) { ?>
                <option <?= $operation == $op
                  ? "selected"
                  : "" ?>><?= $op ?></option>
            <?php } ?>
        </select>
        <input name="operator2" id="operator2" value="<?= htmlspecialchars(
          $operator2,
        ) ?>">
        =
        <input name="result" id="result" placeholder="" value="<?= htmlspecialchars(
          $result,
        ) ?>" readonly>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
