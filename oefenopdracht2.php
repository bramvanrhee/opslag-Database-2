<?php
  $servername = "localhost";
  $databasename = "db_level2_opdr1";
  $username = "bramvanrhee";
  $password = "bram2001";

  //Create connection
  $conn = mysqli_connect($servername, $username, $password, $databasename);
  //Check connection
  if ($conn->connect_error) {
    die ("Connection failed:" . $conn->connect_error);
  }
  else {
  echo "Connected succesfully:";
  }
?>
