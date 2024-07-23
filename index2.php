<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sandbox');

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql = "SELECT * FROM file";
$result = $db->query($sql);
$count = $result->num_rows;

echo $count;

$i = 1;
while ($r = $result->fetch_assoc()) {
  echo $r['last_name'] . '<br>';
}
?>

</body>
</html>