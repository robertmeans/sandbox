<?php
require_once('_config/initialize.php');
?>
<?php require('_includes/head.php'); ?>
<body>
  
<?php // procedural
  // $subject_set = find_all_users();

  // $count = mysqli_num_rows($subject_set);
  // echo $count . '<br><br>';

  // $i = 1;
  // while ($subject = mysqli_fetch_assoc($subject_set)) {
  //   echo $i . ' ' . $subject['last_name'] . ', ' . $subject['first_name'] . '<br>';
  //   $i++;
  // }
?>



<?php // oop

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($db->connect_errno) {
  exit('Database connection failed: ' . $db->connect_error . ' (' . $db->connect_errno . ')');
}

$sql = "SELECT * FROM file";
$result = $db->query($sql);

if (!$result) {
  exit('Database query failed.');
}

// $task = $result->fetch_object();
$count = $result->num_rows;
echo $count . '<br><br>';

  // $i = 1;
  // while ($task = $result->fetch_assoc()) {
  //   echo $i . ' ' . $task['last_name'] . ', ' . $task['first_name'] . '<br>';
  //   $i++;
  // }

  // exact same loop as above but as a for loop...
  for ($i=1; $task = $result->fetch_assoc(); $i++) {
    // echo $i . ' ' . $task['last_name'] . ', ' . $task['first_name'] . '<br>';
    // ^ same as...
    echo "{$i} {$task['last_name']}, {$task['first_name']} <br>";
    // ^ same as...
    echo "$i {$task['last_name']}, {$task['first_name']} <br>";
  }



?>

<?php // procedural
// mysqli_free_result($subject_set); 
?>

<?php // oop
$result->free();
?>

<?php require('_includes/footer.php');