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
        
    <form method="post">
        <input type="hidden" id="hidden" name="money" onclick="winst()">
        <input type="submit" value="Back" name="Back"> 
    </form>
    <?php
        session_start();
        include '../connect.php';
    
    
        $sql = "SELECT * FROM tblgebruikers WHERE gebruikerID = '".$_SESSION["id"]."' ";
    $resultaat = $mysqli ->query($sql);
    
    $row = $resultaat->fetch_assoc();
    
        if(isset($_POST["Back"])){
            
            if(!empty($_POST["money"])) {
                
            $sql1 = "INSERT INTO `tbllog`(`gebruikerID`, `datum`, `transactie`, `gespeeldSpel`) VALUES (".$_SESSION["id"].",'".(date("Y-m-d H:i:s"))."',".($row["coins"]-$_POST["money"]).",'Crash')";
            $mysqli->query($sql1);
            print $sql1;
            }
               
            
            $sql = "UPDATE `tblgebruikers` SET coins = ".$_POST["money"]." WHERE gebruikerID = '".$_SESSION["id"]."'";
            echo($sql);
            if($mysqli->query($sql)){
                echo"ja";
                //header("location: ../index.html");
            }else{
                echo "Error record toevoegen: ".$mysqli ->error."<br>";
            }

            header("location: ../index.php");
        }
    
    ?>
    
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
  <p id="totaalGeld"><?php echo($row["coins"]) ?></p>


  <p style="color: white">Hoeveel zet je in?</p>
  <input id="geld" width="10px" style="background-color: darkred" type="number" name="quantity" min="1" max="100000000000">

    <input width="10px" style="background-color: darkred" placeholder="auto cash-out" id="AutoCash" type="number" name="quantity" min="1" max="100000000000" >
  <button style="background-color: darkred" onclick="Lock()" id="Lock">Lock</button>

  <button style="background-color: darkred" onclick="CashOut()" id="CashOut1" >Cash-out!</button>
  <h1 id="resultaat"></h1>



</div>
</div>
</div>

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