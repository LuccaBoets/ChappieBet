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

    <h1 class="text-center">Hi There</h1>
    <a class="nav-link text-center" href="LogOut.php">Log out</a>


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
            <img class="img-fluid" src="../img/portfolio/01-thumbnail.jpg" alt="">
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
            <img class="img-fluid" src="../img/portfolio/02-thumbnail.jpg" alt="">
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
            <img class="img-fluid" src="../img/portfolio/03-thumbnail.jpg" alt="">
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
            <img class="img-fluid" src="../img/portfolio/05-thumbnail.jpg" alt="">
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