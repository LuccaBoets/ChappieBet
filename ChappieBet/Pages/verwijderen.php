<?php

    include "connect.php";
    echo "<h1>Record verwijderen</h1>";
    
    $sql = "DELETE FROM `tblgebruikers` WHERE gebruikerID = " . $_GET['tewissen'];
    if ($mysqli -> query($sql) == TRUE){
        
        echo "Record succesvol gewist.";
        
    } else {
        
        echo "Error record wissen: " . $mysqli->error;
        
    }

    $mysqli->close();
    header('Location: admin.php');
    print "<br><a href='index.php'>Ga terug naar de lijst</a>";

?>
