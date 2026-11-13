<html>
<body>


<?php  ?>
         
        <?php
        $numero1 = "";
        $numero2 = "";
        $numero3 = "";
        $operacion = "+";

        if (isset($_POST["numero1"]) && isset($_POST["numero2"])) {
          $numero1 = $_POST["numero1"];
          $numero2 = $_POST["numero2"];
          $operacion = $_POST["operacion"];

          if ($operacion == "+") {
            $numero3 = $numero1 + $numero2;
          } elseif ($operacion == "-") {
            $numero3 = $numero1 - $numero2;
          } elseif ($operacion == "X") {
            $numero3 = $numero1 * $numero2;
          } elseif ($operacion == "/") {
            if ($numero2 != 0) {
              $numero3 = $numero1 / $numero2;
            } else {
              $numero3 = "Error: División por cero";
            }
          }
        }
        ?>

        <form method="POST" action="calculadora.php">
        <h2>Calculadora</h2>
        
            <input type="text" name="numero1" value="<?= $numero1 ?>" >


            <select name="operacion" >
                <option value="+">+</option>
                <option value="-" <?php if ($operacion == "-") {
                  echo "selected";
                } ?>>-</option>
                <option value="X" <?php if ($operacion == "X") {
                  echo "selected";
                } ?>>X</option>
                <option value="/" <?php if ($operacion == "/") {
                  echo "selected";
                } ?>>/</option>
            </select>

            <input type="text" name="numero2" value="<?= $numero2 ?>">
             = 
             <input type="text" value="<?= $numero3 ?>">
        <br>
        <button type="submit">Mandar</button>    
        </form>
         



 

</body>
</html>
