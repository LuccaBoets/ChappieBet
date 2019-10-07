function onBet() {

    var dealerCard1 = geefKaart();
    var dealerCard2 = geefKaart();

    var yourCard1 = geefKaart();
    var yourCard2 = geefKaart();

    console.log(dealerCard1);
    console.log( "imagesBlackjack/" + geefKaart() + ".png");
    document.getElementById("dealerCard1").src =  "imagesBlackjack/" + geefKaart() + ".png";
    document.getElementById("dealerCard2").src = dealerCard2;
    document.getElementById("yourCard1").src = yourCard1;
    document.getElementById("yourCard2").src = yourCard2;


}

function onHit() {

    if (document.getElementById("yourCard3").src == 0) {

        document.getElementById("yourCard3").src = "imagesBlackjack/" + geefKaart() + ".png";

    }else if (document.getElementById("yourCard4").src == 0) {

        document.getElementById("yourCard4").src = geefKaart();

    }else if (document.getElementById("yourCard5").src == 0){

        document.getElementById("yourCard5").src = geefKaart();

    }else {

        document.getElementById("testing").srcs = "Gewonnen";
    }

}

function geefKaart() {
    var random1 = Math.abs(Math.random() * 13);
    var random2 = Math.abs(Math.random() * 100);
    random1 = Math.trunc(random1) + 1;
    random2 = Math.trunc(random2);

    console.log(random1);
    console.log(random2);

    if (random2 <= 25) {
        var naamKaart = random1 + "S";
    } else if (random2 <=  50) {
        var naamKaart = random1 + "C";
    }else if (random2 <= 75) {
        var naamKaart = random1 + "D";
    }else {
        var naamKaart = random1 + "H";
    }
    return naamKaart;
}