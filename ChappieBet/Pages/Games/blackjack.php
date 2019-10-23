<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


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

    </style>

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

    <button id="button_bet" onclick="onBet()">BET</button><br>
    <button id="button_hit" onclick="onHit()">HIT</button><br>
    <button id="button_stand" onclick="onStand()">Stand</button>

    <h2 id="uikomstSpel"></h2>

</bodys>
</html>