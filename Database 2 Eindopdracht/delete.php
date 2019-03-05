<?php
  include 'connection.php';

  if (isset($_POST['submit4'])) {
    $sql = "DELETE FROM `verjaardagen` WHERE Voornaam = '".$_POST["Voornaam"]."' or '".$_POST["Achternaam"]."'";

    if ($conn->query($sql) === true) {
      echo "Gebruiker succesvol verwijdert";
    }
    else {
      echo "Error:". $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
?>
