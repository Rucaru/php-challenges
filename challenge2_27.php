<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="challenge2_27.php" method="get">
        <label for="operation">Choose operation:</label>
        <select name="operations">
            <option value="add">Add</option>
            <option value="substract">Substract</option>
            <option value="divide">Divide</option>
            <option value="multiply">Multiply</option>
        </select>
        <label for="x">First number:</label>
        <input type="text" name="firstNumber">
        <label for="y">Second number:</label>
        <input type="text" name="secondNumber">
        <button type="submit">Calcular</button>
    </form>
    
    <?php if (
      isset($_GET["operations"]) &&
      isset($_GET["firstNumber"]) &&
      isset($_GET["secondNumber"])
    ) {
      $operation = $_GET["operations"];
      $firstNumber = (float) $_GET["firstNumber"];
      $secondNumber = (float) $_GET["secondNumber"];

      if ($operation == "add") {
        echo "$firstNumber + $secondNumber = " . $firstNumber + $secondNumber;
      }
      if ($operation == "substract") {
        echo "$firstNumber - $secondNumber = " . $firstNumber - $secondNumber;
      }
      if ($operation == "divide") {
        echo "$firstNumber / $secondNumber = " . $firstNumber / $secondNumber;
      }
      if ($operation == "multiply") {
        echo "$firstNumber x $secondNumber = " . $firstNumber * $secondNumber;
      }
    } ?>
</body>
</html>
</body>
</html>