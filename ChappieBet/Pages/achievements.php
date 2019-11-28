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
        img{
            
            width: 100%;
            opacity: 10%;
        }
</style>

        <title>Achievements</title>
    </head>
    <body>
        <nav><ul><li><h2><a class=\"nav-link\" href='index.php'>Back</a></h2></li></ul></nav>
        <br>
         <h1 style=\"text-align:center;\">Hi There</h1>
         
         <table id='achievements'>
            <tr>
                
                <td class='giftPic'><img id='ach1' src='Games/imagesBlackjack/13H.png'></td>
                <td class='giftPic'><img id='ach2' src='Games/imagesBlackjack/13S.png'></td>
                <td class='giftPic'><img id='ach3' src='Games/imagesBlackjack/13C.png'></td>
                <td class='giftPic'><img id='ach4' src='Games/imagesBlackjack/13D.png'></td>
            </tr>
            <tr>
                <td>Achievement 1</td>
                <td>Achievement 2</td>
                <td>Achievement 3</td>
                <td>Achievement 4</td>
            </tr>
            <tr>
                <td class='giftPic'><img id='ach5' src='Games/imagesBlackjack/12H.png' </td>
                <td class='giftPic'><img id='ach6' src='Games/imagesBlackjack/12S.png' </td>
                <td class='giftPic'><img id='ach7' src='Games/imagesBlackjack/12C.png' </td>
                <td class='giftPic'><img id='ach8' src='Games/imagesBlackjack/12D.png' </td>
            </tr> 
            <tr>
                <td>Achievement 5</td>
                <td>Achievement 6</td>
                <td>Achievement 7</td>
                <td>Achievement 8</td>
            </tr> 
        </table>
    </body>
        
</html>
";
$getCoins = "SELECT `coins` FROM `tblgebruikers` WHERE `gebruikerID` = '".$_SESSION['id']."'";
$coins = $mysqli->query($getCoins);
if ($coins ->num_rows>0){
    $coins = $coins->fetch_assoc();
}
$coins = $coins["coins"];
if ($coins >100){
    $updateAch1 = "UPDATE `tblachievements` SET `achievement_1` = '1' WHERE `gebruikerID` = '".$_SESSION['id']."'";
}


$sqlAch = "SELECT * FROM `tblachievements` WHERE `gebruikerID` = '".$_SESSION['id']."'";
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