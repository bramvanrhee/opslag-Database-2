<html>
<head>
<link rel="stylesheet" type="text/css" href="oefenopdrachten.css">
</head>
<body>
  
<?php
  include 'connection.php';

  $sql = "SELECT ID, Artist, Title FROM `songs`";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Artist</th><th>Title</th></tr>";

    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row['ID']."</td><td>".$row['Artist']."</td><td>".$row['Title']."</td></tr>";
    }
    echo "</table";
  } else {
    echo "0 resultaten";
  }

  $conn->close();
?>
</body>
</html>
