<!DOCTYPE html>
<html>
 <head>
   <title></title>
   <link rel="stylesheet" href="oefenopdrachten.css">
 </head>
 <body>
   <h1>Update of verwijder uw lied</h1>
   <form action="oefenopdracht7.php" method="post">
     <input type="text" name="ID" placeholder="ID om aan te passen">
     <input type="text" name="Artist" placeholder="Artiest">
     <input type="text" name="Title" placeholder="Titel">
     <input type="submit" name="submit" value="Aanpassen">
     <input type="submit" name="submit2" value="Delete">
   </form>

   <br>

   <form action="oefenopdracht3.php" method="post">
     <input type="submit" name="submit3" value="Lijst met liedjes">
   </form>

   <?php
   error_reporting(0);
   include 'connection.php';

if (isset($_POST['submit'])) {
   $sql = "UPDATE `songs` SET Artist = '".$_POST["Artist"]."', Title = '".$_POST["Title"]."' Where ID = '".$_POST["ID"]."'";

   if ($conn->query($sql) === true) {
     echo "Succesvol Aangepast";
   }
   else {
     echo "Error:". $sql . "<br>" . $conn->error;
   }
 }
if (isset($_POST["submit2"])) {
   $sql = "DELETE FROM `songs` WHERE ID = '".$_POST["ID"]."'";

   if ($conn->query($sql) === true) {
     echo "Succesvol Verwijderd";
   }
   else {
     echo "Error:". $sql . "<br>" . $conn->error;
   }
 }

    $conn->close();
   ?>
 </body>
</html>
