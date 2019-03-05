<?php
  include 'connection.php';

//error_reporting(0);
  $sql = "SELECT ID, Voornaam, Achternaam, Geboortedatum, (YEAR(CURDATE())-YEAR(Geboortedatum) -1) AS Age/*, (MONTH(CURDATE())-MONTH(Geboortedatum)) AS Month, (DAY(CURDATE())-DAY(Geboortedatum)) AS Day*/ FROM `verjaardagen`";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Voornaam</th><th>Achternaam</th><th>Geboortedatum</th><th>Leeftijd</th></tr>";

    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row['ID']."</td><td>".$row['Voornaam']."</td><td>".$row['Achternaam']."</td><td>".$row['Geboortedatum']."</td><td>".$row['Age']."</td></tr>"/*<td>".$row['Month']."</td><td>".$row['Day']."</td>"</tr>"*/;
    }
  } else {
    echo "0 resultaten";
  }


  //$d = date(y-m-d);
  //$d1 = new date
//$diff
  $conn->close();
?>
