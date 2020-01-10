<html>
<head>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
    <link href="testIndex.css" rel="stylesheet" type="text/css">
    <title>Daily Gifts</title>
    <link rel="icon" type="image/png" href="icon.png"/>


    <style>

        h1{
            padding-top: 50px;
            margin: 0px;
            margin-bottom: 50px;
        }

        h2{
            margin-top: 0px;
            float: left;
        }

        #gifts{
            margin-left: auto;
            margin-right: auto;
            border: 2px rgb(199,73,58) solid;
            width: 75%;
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

        img{
            width: 100%;
        }

    </style>

</head>
<body>

<?php

//Zet hier de de H1 php voor dagen online anders werkt javascript ni

include "connect.php";
session_start();
$stop_date = date("Y-m-d");
$stop_date = date('Y-m-d', strtotime($stop_date . ' -1 day'));

$sql = "SELECT * FROM `tblgebruikers` WHERE `gebruikerID` = '".$_SESSION['id']."'";
$resultaat = $mysqli ->query($sql);

if ($resultaat->num_rows > 0){
    $row = $resultaat->fetch_assoc();
}
$daysOnline = $row["daysOnline"];
$lastDate = $row["lastDate"];

if ($lastDate == $stop_date){
    $daysOnline+=1;
    $updateDaysonline = "UPDATE tblgebruikers SET daysOnline = '".$daysOnline."'";
    $updateDaysonlineVOERUIT = $mysqli->query($updateDaysonline);

    $datum = date("Y-m-d");
    $sqlSetDate = "UPDATE `tblgebruikers` SET `lastDate` = '".$datum."'
                   WHERE `gebruikerID` =". $_SESSION["id"];
    $sqlSetDateUITVOER = $mysqli->query($sqlSetDate);
    
}else{
    $daysOnline = 0;
    $updateDaysonline = "UPDATE tblgebruikers SET daysOnline = '".$daysOnline."'";
    $updateDaysonlineVOERUIT = $mysqli->query($updateDaysonline);

    $datum = date("Y-m-d");
    $sqlSetDate = "UPDATE `tblgebruikers` SET `lastDate` = '".$datum."'
                   WHERE `gebruikerID` =". $_SESSION["id"];

    $sqlSetDateUITVOER = $mysqli->query($sqlSetDate);
}


echo "

        
        <h2><a class='nav-link' href='index.php'>Back</a></h2>
        <h1 style='text-align: center'>Daily Gifts</h1>
        <table id='gifts'>
        
        <tr>
            <td class='giftPic'>Week 1: </td>
            <td class='giftPic' id='dag1'></td>
            <td class='giftPic' id='dag2'></td>
            <td class='giftPic' id='dag3'></td>
            <td class='giftPic' id='dag4'></td>
            <td class='giftPic' id='dag5'><img src='../img/goldCoin.png'></td>
            <td class='giftPic' id='dag6'></td>
            <td class='giftPic' id='dag7'><img src='../img/goldCoin.png'></td>
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
            <td class='giftPic' id='dag8'></td>
            <td class='giftPic' id='dag9'><img src='../img/goldCoin2.png'></td>
            <td class='giftPic' id='dag10'></td>
            <td class='giftPic' id='dag11'></td>
            <td class='giftPic' id='dag12'></td>
            <td class='giftPic' id='dag13'><img src='../img/goldCoin.png'></td>
            <td class='giftPic' id='dag14'></td>
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
            <td class='giftPic' id='dag15'></td>
            <td class='giftPic' id='dag16'></td>
            <td class='giftPic' id='dag17'></td>
            <td class='giftPic' id='dag18'></td>
            <td class='giftPic' id='dag19'><img src='../img/goldCoin.png'></td>
            <td class='giftPic' id='dag20'></td>
            <td class='giftPic' id='dag21'><img src='../img/goldCoin2.png'></td>
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
         document.getElementById('daysOnline').innerHTML = $daysOnline;
         var daysonline = parseInt(document.getElementById('daysOnline').innerHTML);
         var dagen = 'dag' + $daysOnline;
         console.log(dagen);
         document.getElementById(dagen).style.backgroundColor = '#8E2745';                                      
     
        
</script>
";
?>
    </body >
</html>
