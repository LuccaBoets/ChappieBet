<?php

    $mysqli = new mysqli("localhost", "root", "", "tblgebruikers");
/* 
   Met de voorgaande lijn maken we een verbinding met de databank met de naam cursussql.  
   Onze server is localhost, onze gebruikersnaam root en we hebben geen paswoord ingesteld.
   $mysqli = new mysqli("localhost", "user", "password", "database");
*/

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



?>