

    var stand = false;
    var dealerCards = [

        geefKaart(),
        geefKaart(),
        "Games/imagesBlackjack/default.png",
        "Games/imagesBlackjack/default.png",
        "Games/imagesBlackjack/default.png"
    ]

    var playercards = [

        geefKaart(),
        geefKaart(),
        "Games/imagesBlackjack/default.png",
        "Games/imagesBlackjack/default.png",
        "Games/imagesBlackjack/default.png"
    ]

    var playerTotalValue = 0;
    var dealerTotalValue = 0;
    var cardsOnPlayer = 0;
    var isThereAnAces = false;


function onBet() {

    document.getElementById("button_bet").style.visibility = "hidden";
    document.getElementById("dealerCard0").src = dealerCards[0];
    document.getElementById("dealerCard1").src = dealerCards[1];
    document.getElementById("playerCard0").src = playercards[0];
    document.getElementById("playerCard1").src = playercards[1];

    cardsOnPlayer += 2;

    playerTotalValue += calculateValueOfCard(playercards[0]);
    playerTotalValue += calculateValueOfCard(playercards[1]);
   document.getElementById("test").innerText = playerTotalValue;
}

function onHit() {

    document.getElementById("button_bet").style.visibility = "hidden";
    if (!stand) {



        var onHit = true;

        for (var i = 2; i < playercards.length; i++) {

            if (playercards[i] == "Games/imagesBlackjack/default.png" && onHit) {

                playercards[i] = geefKaart();

                document.getElementById("playerCard" + i).src = playercards[i];
                onHit = false;
                playerTotalValue += calculateValueOfCard(playercards[i]);
                document.getElementById("test").innerText = playerTotalValue;

                if(playerTotalValue > 21){
                    document.getElementById("testing").innerHTML = "That's a bust";
                    break;
                }else if (playerTotalValue == 21) {
                    document.getElementById("testing").innerHTML = "gewonnen";
                    break;
                }

                break;

            } else if (i == 3) {

                document.getElementById("playerCard4").src = playercards[4];
                document.getElementById("testing").innerHTML = "gewonnen";
                document.getElementById("button_bet").style.visibility = "hidden";

            }

        }
    }

}

function onStand() {
    document.getElementById("button_bet").style.visibility = "hidden";
    document.getElementById("button_hit").style.visibility = "hidden";
    stand = true;

    if(playerTotalValue == 21){
        document.getElementById("testing").innerHTML = "Gewonnen";

    }else if (playerTotalValue == 21) {
        document.getElementById("testing").innerHTML = "gewonnen";

    }
}

function geefKaart() {
    var random1 = Math.abs(Math.random() * 13);
    var random2 = Math.abs(Math.random() * 100);
    random1 = Math.trunc(random1) + 1;
    random2 = Math.trunc(random2);

    if (random2 <= 25) {
        var naamKaart = random1 + "S";
    } else if (random2 <=  50) {
        var naamKaart = random1 + "C";
    }else if (random2 <= 75) {
        var naamKaart = random1 + "D";
    }else {
        var naamKaart = random1 + "H";
    }
    return "Games/imagesBlackjack/" + naamKaart + ".png";
}

function calculateValueOfCard(card) {

    var valueOfCard = 0;
    var cardFirstDigit = parseInt(card.charAt(22));

    if (cardFirstDigit == 1){
        var cardSecondeDigit = parseInt(card.charAt(23));
        console.log("secdig:"+cardSecondeDigit);

        switch (cardSecondeDigit) {

            case 0:

            case 1:

            case 2:

            case 3:

                valueOfCard = 10;
                console.log(valueOfCard);
                break;


            default:

                isThereAnAces = true;
                valueOfCard = 11;
                break;

        }

    }else {

        valueOfCard = cardFirstDigit;
    }

    return valueOfCard;
}