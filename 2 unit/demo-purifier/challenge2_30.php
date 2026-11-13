<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Challenge 2.30</title>
</head>
<body>
<?php
require_once __DIR__ . "/vendor/autoload.php";

$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);
$config->set("HTML.Allowed", "h1, strong, a[href]");
$dirty_html =
  '<h1>Proof of concept</h1><strong>Strong text</strong><script>alert("Hacked!");</script><i>Italic</i><a href="challenge2_30.php">Good link</a><a href="javascript:alert("Hacked!")">Wrong link</a>';

$clean_html = $purifier->purify($dirty_html);

echo $clean_html;
?>
</body>
</html>