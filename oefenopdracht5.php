<!DOCTYPE html>
<html>
 <head>
   <title></title>
  <link rel="stylesheet" href="oefenopdrachten.css">
 </head>
 <body>
   <h1>Voeg uw lied toe</h1>
   <form action="oefenopdracht5.php" method="post">
     <input type="text" name="Artist" placeholder="Artiest">
     <input type="text" name="Title" placeholder="Titel">
     <input type="submit" name="submit" value="Voeg toe">
   </form>
<br>
   <h1>Update uw lied</h1>
   <form action="oefenopdracht5.php" method="post">
     <input type="text" name="ID" placeholder="ID">
     <input type="text" name="Artist" placeholder="Artiest aanpassen">
     <input type="text" name="Title" placeholder="Titel aanpassen">
     <input type="submit" name="submit2" value="Update lied">
   </form>
<br>
   <h2>Lijst met liedjes</h2>
   <form action="oefenopdracht3.php" method="post">
     <input type="submit" name="submit3" value="Lijst met liedjes">
   </form>


 <?php
  error_reporting(0);
  include 'connection.php';

 if (isset($_POST['submit'])) {
  $sql = "INSERT INTO `songs` (Artist, Title) VALUES ('".$_POST["Artist"]."','".$_POST["Title"]."')";

  if ($conn->query($sql) === true) {
    echo "Nieuw lied succesvol toegevoegd aan de lijst";
  }
  else {
    echo "Error:". $sql . "<br>" . $conn->error;
  }
 }

 if (isset($_POST['submit2'])) {
   $sql = "UPDATE `songs` SET Artist = '".$_POST["Artist"]."', Title = '".$_POST["Title"]."' WHERE ID = '".$_POST["ID"]."'";

   if ($conn->query($sql) === true) {
     echo "Lied succesvol aangepast";
   }
   else {
    echo "Error:", $sql . "<br>" . $conn->error;
   }
}
  $conn->close();
?>
 </body>
</html>
