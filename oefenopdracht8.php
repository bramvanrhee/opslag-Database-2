<!DOCTYPE html>
<html>
 <head>
   <title></title>
   <link rel="stylesheet" href="oefenopdracht8.css">
 </head>
 <body>

   <h1>Voeg producten toe aan uw verlanglijstje</h1>
   <form action="oefenopdracht8.php" method="post"><br>
     <input type="text" name="product" placeholder="Product">
     <input type="text" name="prijs" placeholder="Prijs">
     <input type="text" name="omschrijving" placeholder="Omschrijving">
     <input type="text" name="tekoop" placeholder="Waar te koop">
     <input type="text" name="website" placeholder="Website">
     <input type="submit" name="submit" value="Vul in">
     <input type="submit" name="submit2" value="Aanpassen">
     <input type="submit" name="submit3" value="Verwijderen">
   </form>

   <br>
   
   <?php
     $servername = "localhost";
     $username = "bramvanrhee";
     $password = "bram2001";
     $databasename = "lijstjes";

     $conn = mysqli_connect($servername, $username, $password, $databasename);

     if ($conn->connect_error) {
       die ("Connection failed:" . $conn->connect_error);
     }

     if (isset($_POST['submit'])) {
       $sql = "INSERT INTO verlanglijstje (Prijs, Product, Omschrijving, TeKoop, Website) VALUES('".$_POST["prijs"]."', '".$_POST["product"]."', '".$_POST["omschrijving"]."','".$_POST["tekoop"]."','".$_POST["website"]."')";

       if ($conn->query($sql) === true) {
         echo "Succesvol Toegevoegd";
       }
       else {
         echo "Error:". $sql . "<br>" . $conn->error;
       }
      }

       $sql = "SELECT Prijs, Product, Omschrijving, TeKoop, Website FROM verlanglijstje";

       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
         echo "<table><tr><th>Product</th><th>Prijs</th><th>Omschrijving</th><th>Te Koop</th><th>Website</th></tr>";

         while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row['Product']."</td><td>€".$row['Prijs']."</td><td>".$row['Omschrijving']."</td><td>".$row['TeKoop']."</td><td>".$row['Website']."</td></tr>";
         }
       } else {
         echo "0 resultaten";
       }

       if (isset($_POST['submit2'])) {
         $sql = "UPDATE `verlanglijstje` SET Prijs = '".$_POST['prijs']."', Omschrijving = '".$_POST['omschrijving']."', TeKoop = '".$_POST['tekoop']."', Website ='".$_POST['website']."' WHERE Product = '".$_POST['product']."'";

         if ($conn->query($sql) === true) {
           echo "Succesvol Aangepast";
         } else {
           echo "Error:". $sql . "<br>" . $conn->error;
         }
       }

       if (isset($_POST['submit3'])) {
         $sql = "DELETE FROM  `verlanglijstje` WHERE Product = '".$_POST['product']."'";

         if ($conn->query($sql) === true) {
           echo "Succesvol Verwijderd";
         } else {
           echo "Error:". $sql . "<br>" . $conn->error;
         }
       }

       $conn->close();


   ?>
 </body>
 </html>
