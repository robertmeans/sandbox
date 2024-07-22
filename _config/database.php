<?php

require_once('_config/db_credentials.php');

  function db_connect() { // called in initialize.php and set to '$db'
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
  }

  function db_disconnect($connection) { // called in footer.php
    if (isset($connection)) {
      mysqli_close($connection);
    }
  }

  function confirm_db_connect() {
    if (mysqli_connect_errno()) {
      $msg  = 'Database connection failed: ';
      $msg .= mysqli_connect_error();
      $msg .= ' (' . mysqli_connect_errno() . ')';
      exit($msg);
    }
  }

  function confirm_result_set($result_set) {
    if (!$result_set) {
      exit('Databse query failed.');
    }
  }

?>