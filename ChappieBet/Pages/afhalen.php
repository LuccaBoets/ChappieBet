<!DOCTYPE html>
<html>
<head>
  <title>Afhalen</title>

</head>
<body>
    
    <?php
    
    include 'connect.php';
    session_start();
    
    
    $sql = "SELECT totaalGeld,coins FROM tblgebruikers WHERE gebruikerID = '".$_SESSION["id"]."' ";
    $resultaat = $mysqli ->query($sql);
    if($row = $resultaat->fetch_assoc()){
        $_SESSION["geld"] = $row["totaalGeld"];
        $_SESSION["coins"] = $row["coins"];
    
        echo("Geld: ");
        echo($_SESSION["geld"]);
        echo "<br> coins:" ;
        echo $_SESSION["coins"];
    }
    

    
    if(isset($_POST["afhalen"])){
        $_SESSION["geld"] = $row["totaalGeld"]-$_POST["afhalenNummer"];
        $sql = "UPDATE `tblgebruikers` SET totaalGeld=".$_SESSION["geld"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
        $mysqli ->query($sql);
        
        header('Location: afhalen.php');
        exit();
    }
    
    if(isset($_POST["storten"])){
        $_SESSION["geld"] = $row["totaalGeld"]+$_POST["stortNummer"];
        $sql = "UPDATE `tblgebruikers` SET totaalGeld=".$_SESSION["geld"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
        $mysqli ->query($sql);
        
        header('Location: afhalen.php');
        exit();
    }
    
    if(isset($_POST["afhalenCoins"])){
        $_SESSION["coins"] = $row["coins"]-$_POST["coinsAfhalen"];
        $sql = "UPDATE `tblgebruikers` SET coins=".$_SESSION["geld"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
        $mysqli ->query($sql);
        
        $_SESSION["geld"] = $row["totaalGeld"]+$_POST["stortCoins"]*100;
        $sql = "UPDATE `tblgebruikers` SET totaalGeld=".$_SESSION["geld"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
        $mysqli ->query($sql);
        
        header('Location: afhalen.php');
        exit();
    }
    
    if(isset($_POST["stortCoinsknop"])){
        $_SESSION["geld"] = $row["coins"]+$_POST["stortCoins"];
        $sql = "UPDATE `tblgebruikers` SET coins=".$_SESSION["geld"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
        $mysqli ->query($sql);
        
        $_SESSION["geld"] = $row["totaalGeld"]-$_POST["stortCoins"]/100;
        $sql2 = "UPDATE `tblgebruikers` SET totaalGeld=".$_SESSION["geld"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
        $mysqli ->query($sql2);
        
        header('Location: afhalen.php');
        exit();
    }
                                                                                        
    ?>
    
    <form  method="post">
        <input type="text" name="afhalenNummer">
        <button type="submit" name="afhalen">geld afhalen</button>
    </form>
    
    <form  method="post">
        <input type="text" name="stortNummer">
        <button type="submit" name="storten">geld storten</button>
    </form>
    
    <form  method="post">
        <input type="text" name="coinsAfhalen">
        <button type="submit" name="afhalenCoins">Coins omzetten</button>
    </form>
    
    <form  method="post">
        <input type="text" name="stortCoins">
        <button type="submit" name="stortCoinsknop">Coins krijgen</button>
    </form>
    

    
</body>
</html>