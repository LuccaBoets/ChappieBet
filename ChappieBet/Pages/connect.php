<link rel = "stylesheet" href="Styles.css"/>

<?php
$mysqli = new mysqli("localhost", "root", "", "../chappiebetSQL");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>

