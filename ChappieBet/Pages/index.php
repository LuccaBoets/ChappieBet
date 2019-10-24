<!DOCTYPE html>
<html>
<head>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="MainCss.css" rel="stylesheet">
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
<ul class="nav flex-column verticalNav">
    <div>
        <li class="nav-item">
            <a href="frontPage.html" class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Games/roulette.php">Roulette</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Games/crash.php">crash</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Games/hogerEnLager.html">hoger en lager</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Games/blackjack.php">blackjack</a>
        </li>
    </div>
    <div class="bottom">
        <li class="nav-item">
            <a class="nav-link" href="profile.html">Profile</a>
        </li>
    </div>
</ul>
    
    <h1 style="text-align: center">Hi There</h1>
    
    
      <section class="page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Pages/Games/Roulette.html">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Roulette</h4>
            <p class="text-muted">Illustration</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Pages/Games/blackjack.html" >
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Blackjack</h4>
            <p class="text-muted">Graphic Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Pages/Games/Crash.html">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Crash</h4>
            <p class="text-muted">Identity</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="Pages/Games/patience.html">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Patience</h4>
            <p class="text-muted">Branding</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Southwest</h4>
            <p class="text-muted">Website Design</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="../img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Window</h4>
            <p class="text-muted">Photography</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>