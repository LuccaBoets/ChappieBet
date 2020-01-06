<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blackjack</title>
    <link rel="icon" type="image/png" href="icon2.png"/>
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../MainCss.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <script src="../../Chart/Chart.css"></script>

    <script type="text/javascript" src="blackjack_V1.js"></script>
</head>
<bodys>
    
    <style>

        td{

            max-width: fit-content;
        }
        img{

            width: 50%;
        }

        #button_hit{
            visibility: hidden;
        }

        #button_stand{
            visibility: hidden;
        }
        h1{
            color: #C7493A;
        }

    </style>
    <h1>Blackjack</h1>

    <table border="1">
        <tr>
            <td><img src="imagesBlackjack/default.png" id="dealerCard0"></td>
            <td><img src="imagesBlackjack/default.png" id="dealerCard1"></td>
            <td><img src="imagesBlackjack/default.png" id="dealerCard2"></td>
            <td><img src="imagesBlackjack/default.png" id="dealerCard3"></td>
            <td><img src="imagesBlackjack/default.png" id="dealerCard4"></td>
        </tr>
        <tr>
            <td><img src="imagesBlackjack/default.png"  id="playerCard0"></td>
            <td><img src="imagesBlackjack/default.png"  id="playerCard1"></td>
            <td><img src="imagesBlackjack/default.png"  id="playerCard2"></td>
            <td><img src="imagesBlackjack/default.png"  id="playerCard3"></td>
            <td><img src="imagesBlackjack/default.png"  id="playerCard4"></td>
        </tr>
    </table>

    <button id="button_bet" onclick="onBet()">Bet</button><br>
    <button id="button_hit" onclick="onHit()">Hit</button>
    <button id="button_stand" onclick="onStand()">Stand</button>

    <h2>Dealer <span id="puntenDealer"></span></h2>
    
    <h2>Player <span id="puntenPlayer"></span></h2>
    <h2 id="uikomstSpel"></h2>

</bodys>
</html>