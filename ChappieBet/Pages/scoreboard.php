<?php
session_start();
include "connect.php";
$sql = "SELECT * FROM tblgebruikers";
$sqlVOERUIT = $mysqli->query($sql);

if ($sqlVOERUIT -> num_rows > 0){
    $row = $sqlVOERUIT->fetch_assoc();
}
$username = $row["username"];
$coins = $row["coins"];
$daysOnline = $row["daysOnline"];

sort($coins);

echo $coins[0] + " " + $coins[1];