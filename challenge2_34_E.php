<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>"Odd" and "Even" number triangle</h1>
    <form action="challenge2_34_E.php" method="post">
        <label for="">Input an odd number of rows</label> <br>
        <input type="text" name="number"> <br>
        <button type="submit">Send</button>
    </form>
     <?php if (isset($_POST["number"])) {
       $odd = false;
       for ($i = 1; $i <= $_POST["number"]; $i++) {
         if ($odd) {
           for ($j = 1; $j <= $i; $j++) {
             if ($j % 2 == 0) {
               echo $j;
             }
           }
           $odd = !$odd;
         }
         if (!$odd) {
           for ($j = 1; $j <= $i; $j++) {
             if ($j % 2 != 0) {
               echo $j;
             }
           }
           $odd = !$odd;
         }
         echo "<br>";
       }
     } ?>
</body>
</html>
