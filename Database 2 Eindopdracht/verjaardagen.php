<!DOCTYPE html>
<html>
<head>
  <title>Verjaardagen Database</title>
  <link rel="stylesheet" href="database.css">
</head>
<body>
  <form action="verjaardagen.php" method="post">
    <input type="text" name="ID" placeholder="ID">
    <input type="text" name="Voornaam" placeholder="Voornaam">
    <input type="text" name="Achternaam" placeholder="Achternaam">
    <input type="date" name="Geboortedatum" placeholder="Geboortedatum">
    <input type="submit" name="submit1" value="Insert">
    <input type="submit" name="submit2" value="Select">
    <input type="submit" name="submit3" value="Update">
    <input type="submit" name="submit4" value="Delete">
  <?php
    include 'connection.php';
    include 'insert.php';
    include 'select.php';
    include 'update.php';
    include 'delete.php';
  ?>

  <br>

  <?php


  ?>
</body>
</html>
