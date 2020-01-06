<?php
include 'connect.php';
session_start();

$getCoins = "SELECT * FROM tblgebruikers WHERE gebruikerID = '".$_SESSION["id"]."'";
$getCoinsVOERUIT = $mysqli->query($getCoins);
if ($getCoinsVOERUIT->num_rows>0){
    $COINS = $getCoinsVOERUIT->fetch_assoc();
}
$COINS = $COINS["coins"];

if ($COINS == 500){
    echo "<cript>
myVar = setInterval(function (temp) {

            window.location.href = 'index.php';

        }, 1000);
alert('You have less than 500 coins, you can only deposit if you have more than 500 coins.');
    
</script>";
    //header("location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Afhalen</title>
   <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
    <link href="testIndex.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php



    $sql = "SELECT totaalGeld,coins FROM tblgebruikers WHERE gebruikerID = '".$_SESSION["id"]."' ";
    $resultaat = $mysqli ->query($sql);
    $row = $resultaat->fetch_assoc();

    
    
    
    ?>
    
    <form method="post">
        <input type="hidden" value="" name="money" id="hiddenGeld"> 
        <input type="hidden" value="" name="coins" id="hiddenCoins"> 
        <input type="submit" value="Back" name="Back"> 
    </form>
    <?php
    
        $sql = "SELECT * FROM tblgebruikers WHERE gebruikerID = '".$_SESSION["id"]."' ";
        $resultaat = $mysqli ->query($sql);

        $row = $resultaat->fetch_assoc();
    
        if(isset($_POST["Back"])){
            
            if(!empty($_POST["money"])) {
                
                $sql1 = "INSERT INTO `tbllogcoins`(`gebruikerID`, `datum`, `transactie`) VALUES (".$_SESSION["id"].",'".(date("Y-m-d H:i:s"))."',".($_POST["money"]-$row["totaalGeld"]).")";
                $mysqli->query($sql1);
                print $sql1;
            }
            
            $sql = "UPDATE `tblgebruikers` SET coins = ".$_POST["coins"].",totaalGeld = ".$_POST["money"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
            echo($sql);
            if($mysqli->query($sql)){
                echo"ja";
                header("location: index.php");
            }else{
                echo "Error record toevoegen: ".$mysqli ->error."<br>";
            }

            header("location: index.php");
        }

    ?>
    
    <h2 id="geldTotaal"><?php echo $row["totaalGeld"]; ?></h2>
    <h2 id="coinsTotaal"><?php echo $row["coins"]; ?></h2>

    <input type="text" name="afhalenNummer" id="geld">
    <button name="afhalen" onclick="geldDing()">geld afhalen</button>

    <input type="text" name="coins" id="coins">
    <button name="stortCoinsknop" onclick="coinsDing()">Coins krijgen</button>
    
    <script>
        console.log("js");
        
        document.getElementById("hiddenGeld").value = document.getElementById("geldTotaal").innerHTML;
        document.getElementById("hiddenCoins").value = document.getElementById("coinsTotaal").innerHTML;
        
        function geldDing(){
            
            console.log("1");
            document.getElementById("geldTotaal").innerHTML = parseInt(document.getElementById("geldTotaal").innerHTML) + parseInt(document.getElementById("geld").value);
            document.getElementById("hiddenGeld").value = document.getElementById("geldTotaal").innerHTML;

        }
        
        function coinsDing(){
            
            document.getElementById("geldTotaal").innerHTML = parseInt(document.getElementById("geldTotaal").innerHTML) - (parseInt(document.getElementById("coins").value)/100);
            document.getElementById("coinsTotaal").innerHTML = parseInt(document.getElementById("coinsTotaal").innerHTML) + parseInt(document.getElementById("coins").value);
            document.getElementById("hiddenCoins").value = document.getElementById("coinsTotaal").innerHTML;

            
        }
    </script>
    
</body>
</html>