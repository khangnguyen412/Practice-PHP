<?php
$mysqli = new mysqli("localhost","root","","shoppingcart");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// ....some PHP code...

$mysqli -> close();
?>