<!DOCTYPE html>
<html>
<head>
    
    <title>Front page</title>
    <link rel="icon" type="image/png" href="icon.png"/>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
    <link href="testIndex.css" rel="stylesheet" type="text/css">
    <link href="collapsingNav.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="collapsingNav.js"></script>

    <script type="text/javascript">
      
      function toonRouletteInfo(){
          alert("The wheel consists of 36 digits and each digit has a red or black color. There is a table next to the wheel and all betting options are shown on this table. You can gamble on a color or number and much more.")
      }

      function toonBlackjackInfo(){
          alert("With blackjack you have to get as close to 21 as possible. If you go over 21 you are lost. In the event of a tie, the dealer wins.")
      }

      function toonCrashInfo(){
          alert("With the game crash you wait while the percentage of the grafic chart go up and you will need to cashout before it hits its limit.")
      }

      function toonHogerLagerInfo(){
          alert("At higher lower, the intention is to predict that your card will be higher or lower than that of the dealer.")
      }

    </script>
</head>
<body>
<?php

session_start();
include 'connect.php';

if(empty($_SESSION["id"])){
    header("Location:../index.html");
    echo $_SESSION["id"];
}

$sql = "SELECT * FROM tblgebruikers WHERE gebruikerID = '".$_SESSION["id"]."' ";
$resultaat = $mysqli ->query($sql);

$row = $resultaat->fetch_assoc();
?>
<div id="mySidebar" class="sidebar">
    <h2><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></h2>
    <h2><a class="nav-link" href="LogOut.php">Log out</a></h2>
    <h2><a class="nav-link" href="dailyGift.php">Daily Gifts</a></h2>
    <h2><a class="nav-link" href="achievements.php">Achievements</a></h2>
    <h2><a class="nav-link" href="scoreboard.php">Leaderboard</a></h2>
    <h2><a class="nav-link" href="afhalen.php">Deposit</a></h2>
    <?php
    if($row["admin"] == 1){
        echo '<h2><a class="nav-link" href="admin.php">admin</a></h2>';
    }

    ?>
    <h2 class="nav-link" id="coins">Coins: <?php echo($row["coins"]) ?></h2>
</div>
<div id="main">





        <nav>
            <ul>
                <li> <a class="openbtn" onClick="openNav()">Open sidebar</a></li>
            </ul>
        </nav>

        <br>
    <!--
    <div style=";" class="NNav">
        <span></span>
        <a class="nav-link" href="LogOut.php">Log out</a>
        <p class="nav-link">Coins: </p>
        <p class="nav-link" id="coins">100</p>
    </div> -->
        <h1 style="text-align:center;">Chappiebet Games</h1>

<style>
    img{
        max-width:100%;
    }
    .NNav{
        font-size: 30px;
        float: right;
        position: absolute;
        right: 0px;
    }
    
</style>
      <section class="page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Games/roulette.php" >
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="../img/Roulettefoto.jfif" alt="">
          </a>
          <div class="portfolio-caption">
            <a onclick="toonRouletteInfo()"><h4>Info</h4></a>
            <h4>Roulette</h4>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Games/blackjack.php" >
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="../img/Blackjackfoto.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <a onclick="toonBlackjackInfo()"><h4>Info</h4></a>
            <h4>Blackjack</h4>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Games/crash.php">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="../img/Crashfoto.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <a onclick="toonCrashInfo()"><h4>Info</h4></a>
            <h4>Crash</h4>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Games/hogerEnLager.php">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="../img/HogerofLager.png"  alt="">
          </a>
          <div class="portfolio-caption">
            <a onclick="toonHogerLagerInfo()"><h4>Info</h4></a>
            <h4>Higher or Lower</h4>
          </div>
        </div>
      </div>
    </div>
  </section>



    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>