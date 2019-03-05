<?php
  $servername = "localhost";
  $databasename = "verjaardagen";
  $username = "bramvanrhee";
  $password = "bram2001";

  $conn = mysqli_connect($servername, $username, $password, $databasename);

  if ($conn->connect_error) {
    die ("Connection failed:" . $conn->connect_error);
  }
?>
