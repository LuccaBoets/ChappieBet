
var ingezeteMunten;

var aces1 = "Games/imagesBlackjack/1C.png";
var aces2 = "Games/imagesBlackjack/1D.png";
var aces3 = "Games/imagesBlackjack/1H.png";
var aces4 = "Games/imagesBlackjack/1S.png";

var gewachtWanneerSpelVoorbijIs = false;

var stand = false;
var dealerCards = [

    geefKaart(),
    geefKaart(),
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png"
];

var playercards = [

    geefKaart(),
    geefKaart(),
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png"
];

var playerTotalValue = 0;
var dealerTotalValue = 0;
var cardsOnPlayer = 0;



function onBet() {

    document.getElementById("button_hit").style.visibility ="visible";
    document.getElementById("button_stand").style.visibility ="visible";

    document.getElementById("button_bet").style.visibility = "hidden";
    document.getElementById("dealerCard0").src = dealerCards[0];

    document.getElementById("playerCard0").src = playercards[0];
    document.getElementById("playerCard1").src = playercards[1];

    cardsOnPlayer += 2;
    playerTotalValue += calculateValueOfCard(playercards[0]);
    playerTotalValue += calculateValueOfCard(playercards[1]);
    dealerTotalValue += calculateValueOfCard(dealerCards[0]);
    dealerTotalValue += calculateValueOfCard(dealerCards[1]);

    if (dealerTotalValue == 21){

        document.getElementById("uikomstSpel").innerHTML = "Dealer wints";
        console.log("21"+dealerTotalValue);
        document.getElementById("button_bet").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        document.getElementById("button_stand").style.visibility = "hidden";

        document.getElementById("dealerCard1").src = dealerCards[1];

        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);

    }

    if (playerTotalValue == 21){
        document.getElementById("uikomstSpel").innerHTML = "gewonnen";
        console.log("21"+playerTotalValue);

        document.getElementById("button_bet").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        document.getElementById("button_stand").style.visibility = "hidden";

        document.getElementById("dealerCard1").src = dealerCards[1];



        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);

    }

}

function onHit() {

    document.getElementById("button_bet").style.visibility = "hidden";
    var onHit = true;

    for (var i = 2; i < playercards.length; i++) {

        if (playercards[i] == "Games/imagesBlackjack/default.png" && onHit) {

            playercards[i] = geefKaart();
            document.getElementById("playerCard" + i).src = playercards[i];
            onHit = false;
            playerTotalValue += calculateValueOfCard(playercards[i]);

            if (playerTotalValue == 21) {


                document.getElementById("uikomstSpel").innerHTML = "gewonnen";
                console.log("21"+playerTotalValue);
                document.getElementById("button_bet").style.visibility = "hidden";
                document.getElementById("button_hit").style.visibility = "hidden";
                document.getElementById("button_stand").style.visibility = "hidden";

                document.getElementById("dealerCard1").src = dealerCards[1];


                //Page Reloads
                myVar = setInterval(function (temp) {

                    location.reload();

                }, 7000);

                break;

            }else if(playerTotalValue > 21){

                if (playercards.includes(aces1)) {

                    playerTotalValue = playerTotalValue - 10;
                    console.log("isAce"+playerTotalValue);
                    aces1 = "";
                    break;

                }else if (playercards.includes(aces2)){

                    playerTotalValue = playerTotalValue - 10;
                    console.log("isAce"+playerTotalValue);
                    aces2 = "";
                    break;

                }else if (playercards.includes(aces3)) {

                    playerTotalValue = playerTotalValue - 10;
                    console.log("isAce"+playerTotalValue);
                    aces3 = "";
                    break;

                }else if (playercards.includes(aces4)) {

                    playerTotalValue = playerTotalValue - 10;
                    console.log("isAce"+playerTotalValue);
                    aces4 = "";
                    break;

                }else {

                    document.getElementById("uikomstSpel").innerHTML = "That's a bust";
                    console.log("Bust"+playerTotalValue);
                    document.getElementById("button_bet").style.visibility = "hidden";
                    document.getElementById("button_hit").style.visibility = "hidden";
                    document.getElementById("button_stand").style.visibility = "hidden";

                    document.getElementById("dealerCard1").src = dealerCards[1];

                    //Page Reloads
                    myVar = setInterval(function (temp) {

                        location.reload();

                    }, 7000);

                    break;

                }

            }else if(playerTotalValue == dealerTotalValue){

                document.getElementById("uikomstSpel").innerHTML = "Dealer wints";
                console.log("21"+dealerTotalValue);
                document.getElementById("button_bet").style.visibility = "hidden";
                document.getElementById("button_hit").style.visibility = "hidden";
                document.getElementById("button_stand").style.visibility = "hidden";

                document.getElementById("dealerCard1").src = dealerCards[1];

                //Page Reloads
                myVar = setInterval(function (temp) {

                    location.reload();

                }, 7000);

            }

            break;

        }
    }

        if (i == 4) {

            document.getElementById("playerCard4").src = playercards[4];
            document.getElementById("uikomstSpel").innerHTML = "gewonnen";
            document.getElementById("button_bet").style.visibility = "hidden";
            document.getElementById("button_hit").style.visibility = "hidden";
            document.getElementById("button_stand").style.visibility = "hidden";

            document.getElementById("dealerCard1").src = dealerCards[1];

            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);

        }

}

function onStand() {
    document.getElementById("button_bet").style.visibility = "hidden";
    document.getElementById("button_hit").style.visibility = "hidden";
    document.getElementById("button_stand").style.visibility = "hidden";
    stand = true;

    document.getElementById("dealerCard1").src = dealerCards[1];

    console.log("voor dowhile");

    for (var i = 2; i < dealerCards.length; i++) {

        if (dealerTotalValue == 21) {
            document.getElementById("uikomstSpel").innerHTML = "Dealer wint";

            document.getElementById("dealerCard1").src = dealerCards[1];

            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);

        }else if (dealerTotalValue > 21){

            document.getElementById("uikomstSpel").innerHTML = "Speler wint";

            document.getElementById("dealerCard1").src = dealerCards[1];

            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);


        } else if (dealerTotalValue >= 17  && dealerCards[4] == "Games/imagesBlackjack/default.png") {

            if (playerTotalValue <= dealerTotalValue) {

                document.getElementById("uikomstSpel").innerHTML = "Dealer wints";
                console.log("21" + dealerTotalValue);
                document.getElementById("button_bet").style.visibility = "hidden";
                document.getElementById("button_hit").style.visibility = "hidden";
                document.getElementById("button_stand").style.visibility = "hidden";

                document.getElementById("dealerCard1").src = dealerCards[1];

                //Page Reloads
                myVar = setInterval(function (temp) {

                    location.reload();

                }, 7000);

            } else if (playerTotalValue >= dealerTotalValue) {

                document.getElementById("uikomstSpel").innerHTML = "gewonnen";
                console.log("21" + playerTotalValue);
                document.getElementById("button_bet").style.visibility = "hidden";
                document.getElementById("button_hit").style.visibility = "hidden";
                document.getElementById("button_stand").style.visibility = "hidden";

                document.getElementById("dealerCard1").src = dealerCards[1];


                //Page Reloads
                myVar = setInterval(function (temp) {

                    location.reload();

                }, 7000);

            }else if (dealerTotalValue > 21){



                if (dealerCards.includes(aces1)) {

                    dealerTotalValue = dealerTotalValue - 10;
                    console.log("isAce"+dealerTotalValue);


                }else if (dealerCards.includes(aces2)){

                    dealerTotalValue = dealerTotalValue - 10;
                    console.log("isAce"+dealerTotalValue);


                }else if (dealerCards.includes(aces3)) {

                    dealerTotalValue = dealerTotalValue - 10;
                    console.log("isAce"+dealerTotalValue);


                }else if (dealerCards.includes(aces4)) {

                    dealerTotalValue = dealerTotalValue - 10;
                    console.log("isAce" + dealerTotalValue);
                }

                document.getElementById("uikomstSpel").innerHTML = "Speler wint";

                document.getElementById("dealerCard1").src = dealerCards[1];

                //Page Reloads
                myVar = setInterval(function (temp) {

                    location.reload();

                }, 7000);

            }

            break;

        }else if (dealerCards[4] != "Games/imagesBlackjack/default.png"){


            document.getElementById("uikomstSpel").innerHTML = "Dealer wints";
            console.log("21" + dealerTotalValue);
            document.getElementById("button_bet").style.visibility = "hidden";
            document.getElementById("button_hit").style.visibility = "hidden";
            document.getElementById("button_stand").style.visibility = "hidden";

            document.getElementById("dealerCard1").src = dealerCards[1];

            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);

        }

        console.log("voor geefkeaart");

        dealerCards[i] = geefKaart();
        document.getElementById("dealerCard" + i).src = dealerCards[i];
        dealerTotalValue += calculateValueOfCard(dealerCards[i]);
        console.log(dealerTotalValue);

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

        switch (cardSecondeDigit) {

            case 0:

            case 1:

            case 2:

            case 3:

                valueOfCard = 10;
                break;


            default:


                valueOfCard = 11;
                break;

        }

    }else {

        valueOfCard = cardFirstDigit;
    }

    return valueOfCard;
}