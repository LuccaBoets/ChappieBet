var dealerTotalValue = 0;

var playerTotalValue = 0;

var ingezeteMunten;
var gewachtWanneerSpelVoorbijIs = false;
var stand = false;
var acePlayer = false;

var aceDealer = false;

var dealerCards = [

    geefKaart(false),
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png"
];
var playercards = [

    geefKaart(true),
    geefKaart(true),
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png"
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

}

function onStand() {

    var dealerOnCards = 1;

    do {

        document.getElementById("dealerCard"+(dealerOnCards)).src = geefKaart(false);
        dealerOnCards++;

        checkDealer();

        console.log(dealerTotalValue);
    } while(dealerTotalValue <= 17);


    if (dealerTotalValue >= playerTotalValue){
        document.getElementById("uikomstSpel").innerHTML = "Dealer wint";
        document.getElementById("dealerCard1").src = dealerCards[1];
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

    calculateValueOfCard("imagesBlackjack/" + naamKaart + ".png",isPlayer);

    return "imagesBlackjack/" + naamKaart + ".png";
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
            document.getElementById("dealerCard1").src = dealerCards[1];

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
        document.getElementById("dealerCard1").src = dealerCards[1];

        //document.getElementById("dealerCard1").src = dealerCards[1];

        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);
    }

}

function checkDealer() {

    console.log(dealerTotalValue);


    if (dealerTotalValue > 21){
        if (aceDealer){
            console.log("ass");
            dealerTotalValue -= 10;
            aceDealer = false;
        }else {
            console.log("dab");
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