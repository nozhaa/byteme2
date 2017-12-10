<?php
$hostname = "localhost";
$username = "id3941584_kamel";
$password = "kamel123";


$con = mysqli_connect($hostname,$username,$password,"id3941584_tunihack");

// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
