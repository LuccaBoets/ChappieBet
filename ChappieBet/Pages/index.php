<!DOCTYPE html>
<html>
<head>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
    <link href="testIndex.css" rel="stylesheet" type="text/css">

    <title>Front page</title>
</head>
<body>
        <?php
    
    session_start();
    if(empty($_SESSION["id"])){
        header("Location:../index.html");
        echo $_SESSION["id"];
    }
    
    ?>

    <nav>

        <ul>
            <li><h2><a class="nav-link" href="LogOut.php">Log out</a></h2></li>
            <li><h2 class="nav-link">Coins: </h2></li>
            <li><h2 class="nav-link" id="coins">100</h2></li>
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
          <a class="portfolio-link" href="Games/roulette.html" >
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="../img/Roulettefoto.jfif" alt="">
          </a>
          <div class="portfolio-caption">
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
            <h4>Crash</h4>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Games/hogerEnLager.html">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="../img/HogerofLager.png"  alt="">
          </a>
          <div class="portfolio-caption">
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