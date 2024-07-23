<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sandbox');

// 1. create db connection
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// test if connection succeeded
if ($db->connect_errno) {
  $msg  = 'Database connection failed: ';
  $msg .= $db->connect_error;
  $msg .= ' (' . $db->connect_errno . ')';
  exit($msg);
}

// 2. perform db query
$sql  = 'SELECT * FROM users';
$result = $db->query($sql);

// test if query successful
if (!$result) {
  exit('Database query failed.');
}

// 3. use returned data (if any)
$task = $result->fetch_object();

// 4. release returned data
$result->free();

// 5. close db connection
$db->close();