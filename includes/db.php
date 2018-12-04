<?php
//$con = mysqli_connect("localhost","dan12","zaq12wsx","zabmun");
$con = mysqli_connect("localhost","root", "admin1", "zabmun");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>