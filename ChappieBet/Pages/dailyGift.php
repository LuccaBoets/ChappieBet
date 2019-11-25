<?php

//Zet hier de de H1 php voor dagen online anders werkt javascript ni

include "connect.php";
session_start();
$stop_date = date("Y-m-d");
$stop_date = date('Y-m-d', strtotime($stop_date . ' -1 day'));
$vorigeDatum= $_SESSION["vorigeDatum"];


$sql = "SELECT `daysOnline` FROM `tblgebruikers` WHERE `gebruikerID` = '".$_SESSION['id']."'";
$resultaat = $mysqli ->query($sql);

if ($resultaat ->num_rows > 0){
    $row = $resultaat->fetch_assoc();
}
$dagen = $row["daysOnline"];

if ($vorigeDatum == $stop_date) {
    $dagen += 1;
    $sqlSetDagen = "UPDATE `tblgebruikers` SET `daysOnline` = '$dagen' WHERE `gebruikerID` =". $_SESSION['id'];
    $VOERsqlSetDagenUIT = $mysqli->query($sqlSetDagen);


    $sqlGetDate = "SELECT `daysOnline` FROM `tblgebruikers` WHERE `gebruikerID` = '".$_SESSION['id']."'";
    $resultaatDate = $mysqli ->query($sql);

    if ($resultaatDate ->num_rows > 0){
        $rowDate = $resultaatDate->fetch_assoc();
    }
    $dagen = $rowDate["daysOnline"];
}
echo "

<html>
    <head>
        <link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"MainCss.css\" rel=\"stylesheet\">
        <link href=\"testIndex.css\" rel=\"stylesheet\" type=\"text/css\">
        <title>Daily Gifts</title>
        
        
        <style>
        
        #gifts{
            margin-left: auto;
            margin-right: auto;
            border: 2px rgb(199,73,58) solid;
            width: 50%;
        }
        
        td{
            border: 1px #917164 solid;
            border-spacing: 0px;
            padding: 0px;
            font-size: 20px;
        }
        
        .giftPic{
            
            height: 100px;
            width: 10%;
        }
        
</style>
        
    </head>
    <body>
        
        <h1>Daily Gifts</h1>
        
        <table id='gifts'>
        
        <tr>
            <td class='giftPic'>Week 1: </td>
            <td class='giftPic' id='dag1'>Gift 1</td>
            <td class='giftPic' id='dag2'></td>
            <td class='giftPic' id='dag3'>Gift 2</td>
            <td class='giftPic' id='dag4'></td>
            <td class='giftPic' id='dag5'>Gift 3</td>
            <td class='giftPic' id='dag6'></td>
            <td class='giftPic' id='dag7'>Gift 4</td>
        </tr>
        
        <tr class='giftDagen'>
            <td class='giftDagen' >Days: </td>
            <td class='giftDagen' >Monday</td>
            <td class='giftDagen' >Tuesday</td>
            <td class='giftDagen' >Wednesday</td>
            <td class='giftDagen' >Thursday</td>
            <td class='giftDagen' >Friday</td>
            <td class='giftDagen' >Saturday</td>
            <td class='giftDagen' >Sunday</td>
        </tr>
        
        <tr>
            <td class='giftPic'>Week 2: </td>
            <td class='giftPic' id='dag8'>Gift 1</td>
            <td class='giftPic' id='dag9'></td>
            <td class='giftPic' id='dag10'>Gift 2</td>
            <td class='giftPic' id='dag11'></td>
            <td class='giftPic' id='dag12'>Gift 3</td>
            <td class='giftPic' id='dag13'></td>
            <td class='giftPic' id='dag14'>Gift 4</td>
        </tr>
        
        <tr class='giftDagen'>
            <td class='giftDagen'>Days: </td>
            <td class='giftDagen'>Monday</td>
            <td class='giftDagen'>Tuesday</td>
            <td class='giftDagen'>Wednesday</td>
            <td class='giftDagen'>Thursday</td>
            <td class='giftDagen'>Friday</td>
            <td class='giftDagen'>Saturday</td>
            <td class='giftDagen'>Sunday</td>
        </tr>
        
        <tr>
            <td class='giftPic'>Week 3: </td>
            <td class='giftPic' id='dag15'>Gift 1</td>
            <td class='giftPic' id='dag16'></td>
            <td class='giftPic' id='dag17'>Gift 2</td>
            <td class='giftPic' id='dag18'></td>
            <td class='giftPic' id='dag19'>Gift 3</td>
            <td class='giftPic' id='dag20'></td>
            <td class='giftPic' id='dag21'>Gift 4</td>
        </tr>
        
        <tr class='giftDagen'>
            <td class='giftDagen'>Days: </td>
            <td class='giftDagen'>Monday</td>
            <td class='giftDagen'>Tuesday</td>
            <td class='giftDagen'>Wednesday</td>
            <td class='giftDagen'>Thursday</td>
            <td class='giftDagen'>Friday</td>
            <td class='giftDagen'>Saturday</td>
            <td class='giftDagen'>Sunday</td>
        </tr>                       
        </table>        
        
        <h1 id='daysOnline'></h1>
        <h1></h1>
<script>
         document.getElementById('daysOnline').innerHTML = $dagen;
         var daysonline = parseInt(document.getElementById('daysOnline').innerHTML);
         var dagen = 'dag' + $dagen;
         console.log(dagen);
         document.getElementById(dagen).style.backgroundColor = '#8E2745';                                      
     
        
</script>
    </body > 
</html>




";