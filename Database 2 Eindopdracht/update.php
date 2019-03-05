<?php
  include 'connection.php';

  if (isset($_POST['submit3'])) {
    $sql = "UPDATE `verjaardagen` SET Voornaam = '".$_POST["Voornaam"]."', Achternaam = '".$_POST["Achternaam"]."', Geboortedatum = '".$_POST["Geboortedatum"]."' WHERE ID = '".$_POST["ID"]."'";

    if ($conn->query($sql) === true) {
      echo "Succesvol aangepast";
    }
    else {
      echo "Error:". $sql . "<br>" . $conn->error;
    }
  }

    $conn->close();
?>
