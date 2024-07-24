<?php

/*                                                   db connection: procedural    */




/*                                                   if else: ternary conjunction */
// old school. don't do it this way...
if (isset($foo)) { $bar = $foo; } else { $bar = '1'; }

// better...
$bar = isset($foo) ? $foo : '1';
// best...
$bar = $foo ?? '1';


/*                                             htmlspecialchars: protect from XSS */
// around 6:00
// https://www.linkedin.com/learning/php-with-mysql-essential-training-1-the-basics/encode-for-html-14190434?autoSkip=true&resume=false
htmlspecialchars();
// better to shorten it in a function once...
function h($string="") { return htmlspecialchars($string); }


/*                                                     check if form is submitted */
function reques_is_post() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}
// then whenever you want to verify a post request...
if (request_is_post()) {
  // process the form
}

// can do the same for GET request, of course