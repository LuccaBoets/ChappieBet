<!DOCTYPE html>
<html>
<head>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
    <link href="testIndex.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
      
      function toonRouletteInfo(){
          alert("Het rad bestaat uit 36 cijfers en elke cijfer heeft een rode of zwarte kleur. Naast het rad bevind zich een tafel en op deze tafel zijn alle inzetmogelijkheden afgebeeld. Je kan gokken op een kleur of getal en nog veel meer.")
      }

      function toonBlackjackInfo(){
          alert("Bij blackjack is het de bedoeling dat je zo dicht mogelijk tegen de 21 komt. Als je over 21 gaat ben je verloren. Bij gelijkspel met de dealer verlies je ook.")
      }

      function toonCrashInfo(){
          alert("Bij crash is het de bedoeling dat je outcash voor de grafiek crasht.")
      }

      function toonHogerLagerInfo(){
        alert("Bij hoger lager is het de bedoeling een hogere kaart te trekken dan de dealer.")
      }

    </script>

    <title>Front page</title>
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
    
    $row = $resultaat->fetch_assoc();?>

    <nav>

        <ul>
            <li><h2><a class="nav-link" href="LogOut.php">Log out</a></h2></li>
            <li><h2><a class="nav-link" href="dailyGift.php">Daily Gifts</a></h2></li>
            <li><h2><a class="nav-link" href="achievements.php">Achievements</a></h2></li>
            <li><h2><a class="nav-link" href="afhalen.php">afhalen</a></h2></li>
            <?php
            
            if($row["admin"] == 1){
                echo '<li><h2><a class="nav-link" href="admin.php">admin</a></h2></li>';
            }
    
            ?>
            <li><h2 class="nav-link" id="coins">Coins: <?php echo($row["coins"]) ?></h2></li>
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
        <h1 style="text-align:center;">Hi There</h1>

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
            <h4>Hoger en lager</h4>
          </div>
        </div>
      </div>
    </div>
  </section>



    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>