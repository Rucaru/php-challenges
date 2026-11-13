
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
session_start();

if (isset($_SESSION["visits"])) {
  $_SESSION["visits"]++;
} else {
  $_SESSION["visits"] = 1;
}
if (!isset($_SESSION["firstVisit"])) {
  $_SESSION["firstVisit"] = date("Y-m-d H:i:s");
}

if (isset($_GET["visits"]) && $_GET["visits"] == 1) {
  $_SESSION["visits"] = 0;
  header("location:challenge3_01.php");
}

if (isset($_GET["destroy"])) {
  $_SESSION = [];
  session_destroy();
  header("location:challenge3_01.php");
}

echo "Número de veces abierta: " . $_SESSION["visits"] . "<br>";
echo "Primera visita a la página web: " . $_SESSION["firstVisit"] . "<br>";
?>
<a href="challenge3_01.php?visits=1">Reset</a>
<a href="challenge3_01.php?destroy">End session</a>
</body>
</html>
