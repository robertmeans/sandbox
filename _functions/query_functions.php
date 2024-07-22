<?php

  function find_all_users() {
    global $db;

    $sql  = "SELECT * FROM file ORDER BY last_name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }
