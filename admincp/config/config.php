<?php
  $mysqli = new mysqli("localhost","root","1234","workshop");

  // Check connection
  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>