<!DOCTYPE html>
<html>
 <head>
   <title></title>
   <link rel="stylesheet" href="oefenopdrachten.css">
 </head>
 <body>

   <h1>Voeg uw lied toe</h1>
   
   <form action="oefenopdracht4.php" method="post">
     <input type="text" name="Artist" placeholder="Artiest"><br><br>
     <input type="text" name="Title" placeholder="Titel"><br><br>
     <input type="submit" name="submit" value="Voeg toe"><br><br>
   </form>
   <form action="oefenopdracht3.php" method="post">
     <input type="submit" name="submit2" value="Lijst met liedjes">
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
  $conn->close();
?>
 </body>
</html>
