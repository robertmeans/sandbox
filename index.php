<?php
require_once('_config/initialize.php');
?>
<?php require('_includes/head.php'); ?>
<body>
  
<?php
  $subject_set = find_all_users();

  $count = mysqli_num_rows($subject_set);
  echo $count . '<br><br>';

  $i = 1;
  while ($subject = mysqli_fetch_assoc($subject_set)) {
    echo $i . ' ' . $subject['last_name'] . ', ' . $subject['first_name'] . '<br>';
    $i++;
  }
?>


<?php mysqli_free_result($subject_set); ?>

<?php require('_includes/footer.php');