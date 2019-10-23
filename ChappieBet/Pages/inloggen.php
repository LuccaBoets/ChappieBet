<?php
include "connect.php";

session_start();
session_destroy();

session_start();

if (isset($_POST["knop"])){//controleer of de knop is ingedrukt

    $sql = "SELECT * FROM tbl_gebruikers WHERE `naam` = '".$_POST['naam']."' AND `wachtwoord` = '" . $_POST['wachtwoord'] . "'";//controleer of er iemand bestaat met deze gebruikersnaam en wachtwoord
    $resultaat = $mysqli ->query($sql);//uitvoeren van de query

    if ($resultaat->num_rows > 0) {//kijk of er iemand is met deze gegevens

        $_SESSION["gebruiker"] = $_POST['naam'];//maak de sessie gebruiker aan met de waarde gebruikersnaam van de gebruiker
        header("Location:index.php");//ga direct naar home.php


    }
    else {

        session_destroy();//anders destroy eventuele lopende sessies
        header("Location:inloggen.php");//ga direcet terug naar index.php

    }



}else {

    print"
    
	<form method='post' action='index.php' >
		<div style='padding-top: 250px; '>
		    <table style='margin: auto '>
		        <tr>
		            <td>
			            <label for='naam'>Gebruikersnaam: </label>
                    </td>
                    <td>
			            <input type='text' name='naam' id='naam'/>
			        </td>
			    </tr>
			<br>
			    <tr>
			        <td>
			            <label for='wachtwoord'>Wachtwoord: </label>
                    </td>
                    <td>
			            <input type='password' name='wachtwoord' id='wachtwoord'/>
			        </td>
			        <td>
			            <input type='submit' name='knop' value='Log in'>
			        </td>
			    </tr>
		    </table>

		</div>

	</form>";

}