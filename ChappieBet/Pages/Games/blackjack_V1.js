var dealerTotalValue = 0;
var playerTotalValue = 0;

var ingezeteMunten;
var gewachtWanneerSpelVoorbijIs = false;
var dealerNotOut = true;
var acePlayer = false;
var aceDealer = false;

var dealerCards = [

    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png"
];
var playercards = [

    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png"
];
var cardsOnPlayer = 0;



function onBet() {

    playercards = [

    geefKaart(true),
    geefKaart(true),
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png"
];
dealerCards = [

    geefKaart(false),
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png",
    "imagesBlackjack/default.png"
];
    
    document.getElementById("button_hit").style.visibility ="visible";
    document.getElementById("button_stand").style.visibility ="visible";

    document.getElementById("button_bet").style.visibility = "hidden";
    document.getElementById("dealerCard0").src = dealerCards[0];

    document.getElementById("playerCard0").src = playercards[0];
    document.getElementById("playerCard1").src = playercards[1];

    cardsOnPlayer += 2;
    
    

}

function onHit() {

    document.getElementById("playerCard"+(cardsOnPlayer)).src = geefKaart(true);
    cardsOnPlayer++;

    checkPlayer();
    console.log(playerTotalValue);

}

function onStand() {

    console.log("js");
    var dealerOnCards = 1;

    do {

        document.getElementById("dealerCard"+(dealerOnCards)).src = geefKaart(false);
        console.log("dealerCard"+(dealerOnCards));
        dealerOnCards++;

        checkDealer();

        console.log(dealerTotalValue);
    } while(dealerTotalValue < 17);


    if (dealerTotalValue >= playerTotalValue && dealerNotOut){
        document.getElementById("uikomstSpel").innerHTML = "Dealer wint";
        document.getElementById("button_stand").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);
    } else {

        document.getElementById("uikomstSpel").innerHTML = "Speler wint";
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
    var cardFirstDigit = parseInt(card.charAt(16));

    if (cardFirstDigit == 1){
        var cardSecondeDigit = parseInt(card.charAt(17));

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
        document.getElementById("puntenPlayer").innerHTML = playerTotalValue;        
    } else {
        dealerTotalValue += valueOfCard
        document.getElementById("puntenDealer").innerHTML = dealerTotalValue;        
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

    }else if (playerTotalValue <= 21){
        checkDealer();

    }
    if (playercards == 5){
        document.getElementById("playerCard4").src = playercards[4];
        document.getElementById("uikomstSpel").innerHTML = "gewonnen";
        document.getElementById("button_bet").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        document.getElementById("button_stand").style.visibility = "hidden";

        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);
    }

}

function checkDealer() {

    console.log("check dealer "+dealerTotalValue);
    console.log("dealer=" + dealerTotalValue +" player=" + playerTotalValue);


    if (dealerTotalValue > 21){
        
        if (aceDealer){
            dealerTotalValue -= 10;
            aceDealer = false;

        }else {
            dealerNotOut = false;
            document.getElementById("button_hit").style.visibility = "hidden";
            document.getElementById("button_stand").style.visibility = "hidden";

        }

    }else if(dealerTotalValue < 21){
        if (dealerTotalValue > playerTotalValue && dealerTotalValue < 21){

            document.getElementById("button_stand").style.visibility = "hidden";
            document.getElementById("button_hit").style.visibility = "hidden";
        }
    }else if (dealerTotalValue == 21){
        document.getElementById("uikomstSpel").innerHTML = "Dealer wint";
        document.getElementById("button_stand").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);
    }else if (dealerTotalValue == playerTotalValue){
        document.getElementById("uikomstSpel").innerHTML = "Dealer wint";
        document.getElementById("button_stand").style.visibility = "hidden";
        document.getElementById("button_hit").style.visibility = "hidden";
        //Page Reloads
        myVar = setInterval(function (temp) {

            location.reload();

        }, 7000);
    }


}