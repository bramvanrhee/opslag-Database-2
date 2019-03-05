<?php
  if (isset($_POST['submit1'])) {
    $sql = "INSERT INTO `verjaardagen` (Voornaam, Achternaam, Geboortedatum) VALUES ('".$_POST["Voornaam"]."','".$_POST["Achternaam"]."','".$_POST["Geboortedatum"]."')";

    if ($conn->query($sql) === true) {
      echo "Gegevens succesvol toegevoegd";
    }
    else {
      echo "Error:". $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
?>
