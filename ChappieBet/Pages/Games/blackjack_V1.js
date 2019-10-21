var dealerTotalValue = 0;

var playerTotalValue = 0;

var ingezeteMunten;
var gewachtWanneerSpelVoorbijIs = false;
var stand = false;
var acePlayer = false;

var aceDealer = false;

var dealerCards = [

    geefKaart(false),
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png"
];
var playercards = [

    geefKaart(true),
    geefKaart(true),
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png",
    "Games/imagesBlackjack/default.png"
];
var cardsOnPlayer = 0;



function onBet() {

    document.getElementById("button_hit").style.visibility ="visible";
    document.getElementById("button_stand").style.visibility ="visible";

    document.getElementById("button_bet").style.visibility = "hidden";
    document.getElementById("dealerCard0").src = dealerCards[0];

    document.getElementById("playerCard0").src = playercards[0];
    document.getElementById("playerCard1").src = playercards[1];

    cardsOnPlayer += 2;


/*
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

    if(playerTotalValue > 21){

        if (playercards.includes(aces1)) {

            playerTotalValue = playerTotalValue - 10;

            console.log("isAce"+playerTotalValue);
            aces1 = "";
        }else if (playercards.includes(aces2)){

            playerTotalValue = playerTotalValue - 10;
            console.log("isAce"+playerTotalValue);
            aces2 = "";


        }else if (playercards.includes(aces3)) {

            playerTotalValue = playerTotalValue - 10;
            console.log("isAce"+playerTotalValue);
            aces3 = "";


        }else if (playercards.includes(aces4)) {

            playerTotalValue = playerTotalValue - 10;
            console.log("isAce"+playerTotalValue);
            aces4 = "";


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



        }


    }

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

    if (dealerTotalValue > 21){

        if (dealerCards.includes(Daces1)) {

            dealerTotalValue = dealerTotalValue - 10;
            console.log("isAce"+dealerTotalValue);
            Daces1 = "";

        }else if (dealerCards.includes(Daces2)){

            dealerTotalValue = dealerTotalValue - 10;
            console.log("isAce"+dealerTotalValue);
            Daces2="";

        }else if (dealerCards.includes(Daces3)) {

            dealerTotalValue = dealerTotalValue - 10;
            console.log("isAce"+dealerTotalValue);
            Daces3 = "";

        }else if (dealerCards.includes(Daces4)) {

            dealerTotalValue = dealerTotalValue - 10;
            console.log("isAce" + dealerTotalValue);
            Daces4 = "";

        }else {

            document.getElementById("uikomstSpel").innerHTML = "Speler wint";

            document.getElementById("dealerCard1").src = dealerCards[1];

            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);

        }



    }
*/

}

function onHit() {

    document.getElementById("playerCard"+(cardsOnPlayer)).src = geefKaart(true);
    cardsOnPlayer++;

    checkPlayer();
    console.log(playerTotalValue);


/*
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
*/

}

function onStand() {

    var dealerOnCards = 1;

    do {

        document.getElementById("dealerCard"+(dealerOnCards)).src = geefKaart(false);
        dealerOnCards++;

        checkDealer();

        console.log(dealerTotalValue);
    } while(dealerTotalValue <= 17);

    console.log(dealerTotalValue  + " en " + playerTotalValue);

    if (dealerTotalValue >= playerTotalValue){
        document.getElementById("uikomstSpel").innerHTML = "Dealer wint";

        document.getElementById("button_bet").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        document.getElementById("button_stand").style.visibility = "hidden";

        //document.getElementById("dealerCard1").src = dealerCards[1];


        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);
    } else {

        document.getElementById("uikomstSpel").innerHTML = "Speler wint";
        document.getElementById("dealerCard1").src = dealerCards[1];
        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);

    }

    /*i = 2;

    document.getElementById("button_bet").style.visibility = "hidden";
    document.getElementById("button_hit").style.visibility = "hidden";
    document.getElementById("button_stand").style.visibility = "hidden";
    stand = true;

    document.getElementById("dealerCard1").src = dealerCards[1];

    console.log(dealerTotalValue + "voor 21if");
    
    while (dealerTotalValue <= 17) {

        if (dealerTotalValue == 21) {

            document.getElementById("uikomstSpel").innerHTML = "Dealer wint";
            document.getElementById("dealerCard1").src = dealerCards[1];
            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);

        }

        console.log(dealerTotalValue + "voor 17 if");
        console.log(dealerCards[4]);


        if (dealerTotalValue <= 17 && dealerCards[4] == "Games/imagesBlackjack/default.png") {

            while (i < dealerCards.length) {

                if (dealerCards[i] == "Games/imagesBlackjack/default.png") {

                    console.log("kaarjtesgeven");

                    dealerCards[i] = geefKaart();
                    document.getElementById("dealerCard" + i).src = dealerCards[i];
                    dealerTotalValue += calculateValueOfCard(dealerCards[i]);
                    console.log(dealerTotalValue);
                    i++;
                    break;


                }

            }
        }

        if (dealerTotalValue === playerTotalValue) {

            document.getElementById("uikomstSpel").innerHTML = "Dealer wint";
            document.getElementById("dealerCard1").src = dealerCards[1];
            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);


        }

        if (dealerTotalValue < playerTotalValue) {


            document.getElementById("uikomstSpel").innerHTML = "Speler wint";
            document.getElementById("dealerCard1").src = dealerCards[1];
            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);

        }

        if (dealerTotalValue > playerTotalValue) {

            document.getElementById("uikomstSpel").innerHTML = "Dealer wint";
            console.log("21" + playerTotalValue);

            document.getElementById("button_bet").style.visibility = "hidden";
            document.getElementById("button_hit").style.visibility = "hidden";
            document.getElementById("button_stand").style.visibility = "hidden";

            document.getElementById("dealerCard1").src = dealerCards[1];


            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);


        }

        if (dealerTotalValue > 21) {

            if (dealerCards.includes(Daces1)) {

                dealerTotalValue = dealerTotalValue - 10;
                console.log("isAce" + dealerTotalValue);
                Daces1 = "";

            } else if (dealerCards.includes(Daces2)) {

                dealerTotalValue = dealerTotalValue - 10;
                console.log("isAce" + dealerTotalValue);
                Daces2 = "";

            } else if (dealerCards.includes(Daces3)) {

                dealerTotalValue = dealerTotalValue - 10;
                console.log("isAce" + dealerTotalValue);
                Daces3 = "";

            } else if (dealerCards.includes(Daces4)) {

                dealerTotalValue = dealerTotalValue - 10;
                console.log("isAce" + dealerTotalValue);
                Daces4 = "";

            } else {

                document.getElementById("uikomstSpel").innerHTML = "Speler wint";

                document.getElementById("dealerCard1").src = dealerCards[1];

                //Page Reloads
                myVar = setInterval(function (temp) {

                    location.reload();

                }, 7000);

            }


        }


    }*/



}

function geefKaart(isPlayer) {

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

    calculateValueOfCard("Games/imagesBlackjack/" + naamKaart + ".png",isPlayer);

    return "Games/imagesBlackjack/" + naamKaart + ".png";
}

function calculateValueOfCard(card,isPlayer) {

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

                if (isPlayer){
                    acePlayer = true;
                } else {
                    aceDealer = true;
                }
                valueOfCard = 11;
                break;

        }

    }else {

        valueOfCard = cardFirstDigit;
    }

    if (isPlayer){
        playerTotalValue += valueOfCard;
    } else {
        dealerTotalValue += valueOfCard
    }

}

function checkPlayer() {

    if (playerTotalValue > 21){

        if (acePlayer){
            playerTotalValue -= 10;
            acePlayer = false;
        } else {

            document.getElementById("uikomstSpel").innerHTML = "That's a bust";
            console.log("Bust"+playerTotalValue);
            document.getElementById("button_bet").style.visibility = "hidden";
            document.getElementById("button_hit").style.visibility = "hidden";
            document.getElementById("button_stand").style.visibility = "hidden";

            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);
        }

    }
    if (playercards == 5){
        document.getElementById("playerCard4").src = playercards[4];
        document.getElementById("uikomstSpel").innerHTML = "gewonnen";
        document.getElementById("button_bet").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        document.getElementById("button_stand").style.visibility = "hidden";

        //document.getElementById("dealerCard1").src = dealerCards[1];

        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);
    }

}

function checkDealer() {

    console.log(dealerTotalValue  + " en " + playerTotalValue);
    
    if (dealerTotalValue > 21){
        if (aceDealer){
            dealerTotalValue -= 10;
            aceDealer = false;
        } else {

            document.getElementById("uikomstSpel").innerHTML = "gewonnen";
            document.getElementById("button_bet").style.visibility = "hidden";
            document.getElementById("button_hit").style.visibility = "hidden";
            document.getElementById("button_stand").style.visibility = "hidden";

            //document.getElementById("dealerCard1").src = dealerCards[1];

            //Page Reloads
            myVar = setInterval(function (temp) {

                location.reload();

            }, 7000);

        }
    }


}
