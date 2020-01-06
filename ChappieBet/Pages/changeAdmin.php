<?php

    include "connect.php";

    $sql = "SELECT admin FROM `tblgebruikers` WHERE gebruikerID = " . $_GET['teveranderen'];

    $resultaat = $mysqli->query($sql);
    $row = $resultaat->fetch_assoc();
    echo $row["online"];

    if ($row["admin"] == 0) {
        $update = "UPDATE `tblgebruikers` SET `admin` = '1' WHERE gebruikerID= " . $_GET['teveranderen'];
        $resultaat = $mysqli->query($update);
    }else{
        echo "azdzadzda";

        $update = "UPDATE `tblgebruikers` SET `admin` = '0' WHERE gebruikerID = " . $_GET['teveranderen'];
        $resultaat = $mysqli->query($update);
    }

    header('Location: admin.php');
        


?>

