<?php
// Create connection
$con = mysqli_connect("localhost", "root", "", "frjs");

// Check connection
if (mysqli_connect_error()) {
  echo "failed to connect to mysql: " . mysqli_connect_error();
  exit();
echo "Connected successfully";
}
?>