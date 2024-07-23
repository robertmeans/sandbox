<?php

// credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sandbox');

// 1. create a db connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// test if connection succeeded
if (mysqli_connect_errno()) {
  $msg  = 'Database connection failed: ';
  $msg .= mysqli_connect_error();
  $msg .= ' (' . mysqli_connect_errno() . ')';
  exit($msg);
}

// 2. perform db query
$query = "SELECT * FROM users";
$result_set = mysqli_query($connection, $query);

// test if query succeeded
if (!$result_set) {
  exit('Databse query failed.');
}

// 3. use returned data (if any)
while ($subject = mysqli_fetch_assoc($result_set)) {
  echo $subject['first_name'] . '<br>';
}

// 4. release returned data
mysqli_free_result($result_set);

// 5. close db connection
mysqli_close($connection);