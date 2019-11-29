<?php
include "connect.php";
session_start();

echo "
<html>
    <head>
        <link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"MainCss.css\" rel=\"stylesheet\">
        <link href=\"testIndex.css\" rel=\"stylesheet\" type=\"text/css\">

        <style>
        
        #achievements{
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
        }
        img{
            
            width: 100%;
            opacity: 10%;
        }
</style>

        <title>Achievements</title>
    </head>
    <body>
        <ul><li><h2><a class=\"nav-link\" href='index.php'>Back</a></h2></li></ul>
        <br>
         <h1 style=\"text-align:center;\">Achievements</h1>
         
         <table id='achievements'>
            <tr>
                
                <td class='giftPic'><img id='ach1' src='Games/imagesBlackjack/11H.png'></td>
                <td class='giftPic'><img id='ach2' src='Games/imagesBlackjack/12S.png'></td>
                <td class='giftPic'><img id='ach3' src='Games/imagesBlackjack/13C.png'></td>
                <td class='giftPic'><img id='ach4' src='Games/imagesBlackjack/11D.png'></td>
            </tr>
            <tr>
                <td>Above 1000 coins</td>
                <td>Above 500.000 coins</td>
                <td>Above 1000.000 coins</td>
                <td>5 consecutive days online</td>
            </tr>
            <tr>
                <td class='giftPic'><img id='ach5' src='Games/imagesBlackjack/12H.png' </td>
                <td class='giftPic'><img id='ach6' src='Games/imagesBlackjack/13S.png' </td>
                <td class='giftPic'><img id='ach7' src='Games/imagesBlackjack/12C.png' </td>
                <td class='giftPic'><img id='ach8' src='Games/imagesBlackjack/13D.png' </td>
            </tr> 
            <tr>
                <td>10 consecutive days online</td>
                <td>25 consecutive days online</td>
                <td>5 games won</td>
                <td>25 games won</td>
            </tr> 
        </table>
    </body>
        
</html>
";
$sqlAch = "SELECT * FROM `tblgebruikers` WHERE `gebruikerID` = '".$_SESSION['id']."'";
$achResult = $mysqli->query($sqlAch);
if ($achResult ->num_rows > 0){
    $achResult = $achResult->fetch_assoc();
}
$achBool1 = $achResult["achievement_1"];
$achBool2 = $achResult["achievement_2"];
$achBool3 = $achResult["achievement_3"];
$achBool4 = $achResult["achievement_4"];
$achBool5 = $achResult["achievement_5"];
$achBool6 = $achResult["achievement_6"];
$achBool7 = $achResult["achievement_7"];
$achBool8 = $achResult["achievement_8"];


$getAlles = "SELECT * FROM `tblgebruikers` WHERE `gebruikerID` = '".$_SESSION['id']."'";
$getAllesUITVOER = $mysqli->query($getAlles);
if ($getAllesUITVOER ->num_rows>0){
    $row = $getAllesUITVOER->fetch_assoc();
}
$coins = $row["coins"];
$daysonline = $row["daysOnline"];
$admin = $row["admin"];
$winstreak = $row["winstreak"];


if ($achBool1 != 1) {
    if ($coins > 1000) {
        $updateAch1 = "UPDATE `tblgebruikers` SET `achievement_1` = '1' WHERE `gebruikerID` = '" . $_SESSION['id'] . "'";
        $updateAch1VOERUIT = $mysqli->query($updateAch1);
    }
}

if ($achBool2 != 1){
    if ($coins > 500000){
        $updateAch2 = "UPDATE `tblgebruikers` SET `achievement_2` = '1' WHERE `gebruikerID` = '" . $_SESSION['id'] . "'";
        $updateAch2VOERUIT = $mysqli->query($updateAch2);
    }
}

if ($achBool3 != 1){
    if ($coins > 1000000){
        $updateAch3 = "UPDATE `tblgebruikers` SET `achievement_3` = '1' WHERE `gebruikerID` = '".$_SESSION["id"]."'";
        $updateAch3VOERUIT = $mysqli->query($updateAch3);
    }
}

if ($achBool4 != 1){
    if ($daysonline >= 5){
        $updateAch4 = "UPDATE `tblgebruikers` SET `achievement_4` = '1' WHERE `gebruikerID` = '".$_SESSION["id"]."'";
        $updateAch4VOERUIT = $mysqli->query($updateAch4);
    }
}

if ($achBool5 != 1){
    if ($daysonline > 10){
        $updateAch5 = "UPDATE `tblgebruikers` SET `achievement_5` = '1' WHERE `gebruikerID` = '".$_SESSION["id"]."'";
        $updateAch5VOERUIT = $mysqli->query($updateAch5);
    }
}

if ($achBool6 != 1){
    if ($daysonline > 25){
        $updateAch6 = "UPDATE `tblgebruikers` SET `achievement_6` = '1' WHERE `gebruikerID` = '".$_SESSION["id"]."'";
        $updateAch6VOERUIT = $mysqli->query($updateAch6);
    }
}

if ($achBool7 != 1){
    if ($winstreak > 5){
        $updateAch7 = "UPDATE `tblgebruikers` SET `achievement_7` = '1' WHERE `gebruikerID` = '".$_SESSION["id"]."'";
        $updateAch7VOERUIT = $mysqli->query($updateAch7);
    }
}

if ($achBool8 != 1){
    if ($winstreak > 25){
        $updateAch8 = "UPDATE `tblgebruikers` SET `achievement_8` = '1' WHERE `gebruikerID` = '".$_SESSION["id"]."'";
        $updateAch8VOERUIT = $mysqli->query($updateAch8);
    }
}

if ($achBool1 == 1){
    echo "<script>document.getElementById('ach1').style.opacity = '100%'</script>";

}
if ($achBool2 == 1){
    echo "<script>document.getElementById('ach2').style.opacity = '100%'</script>";

}
if ($achBool3 == 1){
    echo "<script>document.getElementById('ach3').style.opacity = '100%'</script>";

}
if ($achBool4==1){
    echo "<script>document.getElementById('ach4').style.opacity = '100%'</script>";

}
if ($achBool5==1){
    echo "<script>document.getElementById('ach5').style.opacity = '100%'</script>";

}
if ($achBool6==1){
    echo "<script>document.getElementById('ach6').style.opacity = '100%'</script>";

}
if ($achBool7==1){
    echo "<script>document.getElementById('ach7').style.opacity = '100%'</script>";

}
if ($achBool8==1){
    echo "<script>document.getElementById('ach8').style.opacity = '100%'</script>";

}