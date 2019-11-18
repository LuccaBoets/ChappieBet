<!DOCTYPE html>
<html>
<head>
	<title>Higher or lower</title>
	
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
<body onLoad="EersteGetal()">
    
    

    
    
<style type="text/css">
	img{
		width: 25%;

	}
	h3{
		color: darkred;
	}

	button {
    	position: center;
    
	}

</style>

    <h1>Higher or lower</h1>
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
    <p id="geld"><?php echo($row["coins"]) ?></p>
    <input type="number" name="ingezetGeld" placeholder="Money" id="geldInput" >
    <button onclick="inzetten();">Bet!</button>
    <button onclick="winst()">Test</button>
	<table>
        <tr>
    		<th><h3 id="Getal1"></h3></th> 	
    		<th><h3 id="Getal2"></h3></th>
    	</tr>	
    	<tr>
    		<th><img id="imgGetal1" src="" style="width:200px"></th>
    		<th><img id="imgGetal2" src="" style="width:200px"></th>
    	</tr>
    </table>
   	<button onclick="Hoger()">Hoger</button>
   	<button onclick="Lager()">Lager</button>
   	<h3 id="Resultaat"></h3>
    <p id="hidden"></p>

    <!-- Chart JavaScript -->
    <script src="../../Chart/Chart.min.js"></script>
	<script type="text/javascript" src="hogerEnLager.js"></script>
    
        
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