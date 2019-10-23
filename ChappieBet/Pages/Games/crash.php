<!DOCTYPE html>
<html>
<head>
	<title>Crash</title>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../MainCss.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <script src="../../Chart/Chart.css"></script>
</head>
<body>
    
      <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">ChappieBet</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
    
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <form method="get" name="form" action="crash.php"> 
        <input type="hidden" id="hidden" name="money"> 
        <input type="submit" value="Next" name="submit"> 
    </form> 
  </div>

</div>
    
<div class="container">
  <div class="row" style="margin-top: 200px">
    <div class="col-sm">

	<h1 id="getal" style="text-align: center;">0</h1>

    <div style="position: relative; width:30%">
        
        <canvas id="myChart"></canvas>
        
    </div>
  </div>

<div class="col-sm">
        
	<button onclick = "randomGetal()" id="myBtn">Generate</button>

  <p style="color: white">Hoeveel zet je in?</p>
  <input id="geld" width="10px" style="background-color: darkred" type="number" name="quantity" min="1" max="100000000000">

    <input width="10px" style="background-color: darkred" placeholder="auto cash-out" id="AutoCash" type="number" name="quantity" min="1" max="100000000000" >
  <button style="background-color: darkred" onclick="Lock()" id="Lock">Lock</button>

  <button style="background-color: darkred" onclick="CashOut()" id="CashOut1" >Cash-out!</button>
  <h1 id="resultaat"></h1>



</div>
</div>
</div>
    
<?php
    if(!empty($_GET['money'])){
        $result = $_GET['money']; 
        echo $result; 
        $sql = "SELECT * FROM tbl_gebruikers WHERE `naam` = '".$_POST['naam']."' AND `wachtwoord` = '" . $_POST['wachtwoord'] . "'";
        $resultaat = $mysqli ->query($sql);
    }
    
    
    


?>
    
    <!-- Chart JavaScript -->
    <script src="../../Chart/Chart.min.js"></script>
	  <script type="text/javascript" src="crash.js"></script>
    
        
    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../../js/jqBootstrapValidation.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/agency.min.js"></script>


    
</body>
</html>