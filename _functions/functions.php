<?php

function show_livereload() {
  $foo = $_SERVER['HTTP_HOST'];
  if ($foo == 'localhost') {
    echo '<script src="http://localhost:35729/livereload.js"></script>';
  }  
}

