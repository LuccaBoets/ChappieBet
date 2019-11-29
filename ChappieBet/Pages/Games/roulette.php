<!DOCTYPE html>
<html>
<head>
	<title>Roulette</title>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../MainCss.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="roulette.css" rel="stylesheet" type="text/css">
    <script src="roulette.js"></script>
</head>
<body onload="onStart()">

      <!-- Navigation -->

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
  <input id="inzet" class="button" width="10px" style="background-color: darkred" type="number" name="quantity" min="1" max="100000000000" value="0">
  <p id="beschikbareBedrag"><?php echo($row["coins"])?></p>


  <br>
  <table  border="1" id="nummers" width="100%">
    <tbody>
      <tr>
        <td></td>
        <td id="3" onclick="onBetNumber(3)" class="oneven">3</td>
        <td id="6" onclick="onBetNumber(6)" class="even">6</td>
        <td id="9" onclick="onBetNumber(9)" class="oneven">9</td>
        <td id="12" onclick="onBetNumber(12)" class="oneven">12</td>
        <td id="15" onclick="onBetNumber(15)" class="even">15</td>
        <td id="18" onclick="onBetNumber(18)" class="oneven">18</td>
        <td id="21" onclick="onBetNumber(21)" class="oneven">21</td>
        <td id="24" onclick="onBetNumber(24)" class="even">24</td>
        <td id="27" onclick="onBetNumber(27)" class="oneven">27</td>
        <td id="30" onclick="onBetNumber(30)" class="oneven">30</td>
        <td id="33" onclick="onBetNumber(33)" class="even">33</td>
        <td id="36" onclick="onBetNumber(36)" class="oneven">36</td>
      </tr>
      <tr>
        <td id="0" onclick="onBetNumber(0)" id="null">0</td>
        <td id="2" onclick="onBetNumber(2)" class="even">2</td>
        <td id="5" onclick="onBetNumber(5)" class="oneven">5</td>
        <td id="8" onclick="onBetNumber(8)" class="even">8</td>
        <td id="11" onclick="onBetNumber(11)" class="even">11</td>
        <td id="14" onclick="onBetNumber(14)" class="oneven">14</td>
        <td id="17" onclick="onBetNumber(17)" class="even">17</td>
        <td id="20" onclick="onBetNumber(20)" class="even">20</td>
        <td id="23" onclick="onBetNumber(23)" class="oneven">23</td>
        <td id="26" onclick="onBetNumber(26)" class="even">26</td>
        <td id="29" onclick="onBetNumber(29)" class="even">29</td>
        <td id="32" onclick="onBetNumber(32)" class="oneven">32</td>
        <td id="35" onclick="onBetNumber(35)" class="even">35</td>
      </tr>
      <tr>
        <td></td>
        <td id="1" onclick="onBetNumber(1)"class="oneven">1</td>
        <td id="4" onclick="onBetNumber(4)" class="even">4</td>
        <td id="7" onclick="onBetNumber(7)" class="oneven">7</td>
        <td id="10" onclick="onBetNumber(10)" class="even">10</td>
        <td id="13" onclick="onBetNumber(13)" class="even">13</td>
        <td id="16" onclick="onBetNumber(16)" class="oneven">16</td>
        <td id="19" onclick="onBetNumber(19)" class="oneven">19</td>
        <td id="22" onclick="onBetNumber(22)" class="even">22</td>
        <td id="25" onclick="onBetNumber(25)" class="oneven">25</td>
        <td id="28" onclick="onBetNumber(28)" class="even">28</td>
        <td id="31" onclick="onBetNumber(31)" class="even">31</td>
        <td id="34" onclick="onBetNumber(34)" class="oneven">34</td>
      </tr>
      <tr>
        <td></td>
        <td onclick="onBetExtra(112)" colspan="4">1st 12</td>
        <td onclick="onBetExtra(212)" colspan="4">2nd 12</td>
        <td onclick="onBetExtra(312)" colspan="4">3rd 12</td>
      </tr>
      <tr>
        <td></td>
        <td onclick="onBetExtra(118)" colspan="6">1 to 18</td>
        <td onclick="onBetExtra(1936)" colspan="6">19 to 36</td>
      </tr>
      <tr>
        <td onclick="onBetExtra(88)" colspan="4">Even</td>
        <td onclick="onBetExtra(500)" colspan="3" class="oneven">Red</td>
        <td onclick="onBetExtra(600)" colspan="3" class="even">Black</td>
        <td onclick="onBetExtra(89)" colspan="3">Odd</td>
      </tr>
    </tbody>
    <br>
  </table>

  <table class="gegokteGetalen" border="1" id="getallenopgegokt">

    <tr>
      <td id="gegoktGetal1"></td>
      <td id="gegoktGetal2"></td>
      <td id="gegoktGetal3"></td>
      <td id="extra1"></td>
      <td id="extra2"></td>
      <td id="extra3"></td>
    </tr>

  </table>





</div>
</div>


<input type="range" min="1" max="36" value="0" class="slider" id="rouletteSlider">
<p id="gewordenGetal"></p>
<button class="button" onclick="onBet()">Bet</button>


      <script src="roulette.js"></script>

</body>
</html>
