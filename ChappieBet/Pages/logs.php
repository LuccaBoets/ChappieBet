<!DOCTYPE html>
<html>
<head>
	<title>logs</title>
    <link rel="icon" type="image/png" href="icon.png"/>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
   
</head>
<body>
<style>
        td{
            padding-right:20px;
        }
    </style>
      <div class="header" style="margin: 50px">
  <h2>game logs</h2>
  </div>
 <a href="admin.php">Back to menu</a>

    <?php

include "connect.php";
// We zetten onze query die we willen uitvoeren in een variabele.
$sql = "SELECT * FROM `tbllog` WHERE `gebruikerID` = " .$_GET['show'];

// We voeren de query uit en alle resultaten worden in de variabele $resultaat gezet
$resultaat = $mysqli->query($sql);

// In de variabele $resultaat staan alle wijnen, we zullen ze lijn per lijn inlezen
// in de variabele $row.  We gebruiken daarvoor fetch_assoc()

echo "<table>";
echo "<tr><td>datum</td><td>transactie</td><td>gespeeld Spel</td></tr>";
while ($row = $resultaat->fetch_assoc()) {
	
    echo "<tr><td>".$row['datum']."
    		</td><td>".$row['transactie']."
    		</td><td>".$row['gespeeldSpel']."
    		</td>
    </tr>";
}
//    <td><a href='wissen.php?tewissen=".$row['leerlingenNr']."'>Wissen</a></td><td><a href='wijzingen.php?teveranderen=".$row['leerlingenNr']."'>Veranderen</a></td>
echo "</table>";
?>
    
    <div class="header" style="margin: 50px">
  <h2>game logs</h2>
  </div>

    <?php

include "connect.php";
// We zetten onze query die we willen uitvoeren in een variabele.
$sql = "SELECT * FROM `tbllogcoins` WHERE `gebruikerID` = " .$_GET['show'];

// We voeren de query uit en alle resultaten worden in de variabele $resultaat gezet
$resultaat = $mysqli->query($sql);

// In de variabele $resultaat staan alle wijnen, we zullen ze lijn per lijn inlezen
// in de variabele $row.  We gebruiken daarvoor fetch_assoc()

echo "<table>";
echo "<tr><td>datum</td><td>transactie</td></tr>";
while ($row = $resultaat->fetch_assoc()) {
	
    echo "<tr><td>".$row['datum']."
    		</td><td>".$row['transactie']."
    		</td>
    </tr>";
}
echo "</table>";
?>
    

</body>
</html>