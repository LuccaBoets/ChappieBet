  <!DOCTYPE html>
<html>
<head>
  <title>admin</title>
    
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
   
</head>
<body>
  <div class="header" style="margin: 50px">
  <h2>Admin</h2>
  </div>
 <a href="index.php">Back to menu</a>

    <?php

include "connect.php";
// We zetten onze query die we willen uitvoeren in een variabele.
$sql = "SELECT * FROM `tblgebruikers` ";

// We voeren de query uit en alle resultaten worden in de variabele $resultaat gezet
$resultaat = $mysqli->query($sql);

// In de variabele $resultaat staan alle wijnen, we zullen ze lijn per lijn inlezen
// in de variabele $row.  We gebruiken daarvoor fetch_assoc()

echo "<table>";
echo "<tr><td>ID</td><td>Username</td><td>Mail</td><td>totaalGeld</td><td>Admin</td><td>Coins</td><td>last Date</td><td>Days Online</td></tr>";
while ($row = $resultaat->fetch_assoc()) {
	
    echo "<tr><td>".$row['gebruikerID']."
    		</td><td>".$row['username']."
    		</td><td>".$row['mail']."
    		</td><td>".$row['totaalGeld']."
    		</td><td>".$row['admin']."
    		</td><td>".$row['coins']."
    		</td><td>".$row['lastDate']."
    		</td><td>".$row['daysOnline']."
    		</td><td>".$row['online']."
    		</td>
    <td style='padding-right:20px'><a href='verwijderen.php?tewissen=".$row['gebruikerID']."'>Wissen</a></td><td><a href='changeAdmin.php?teveranderen=".$row['gebruikerID']."'>Change admin</a></td></tr>";
}
//    <td><a href='wissen.php?tewissen=".$row['leerlingenNr']."'>Wissen</a></td><td><a href='wijzingen.php?teveranderen=".$row['leerlingenNr']."'>Veranderen</a></td>
echo "</table>";
?>
    
</body>
</html> 

