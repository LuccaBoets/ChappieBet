function onBet() {

    var dealersCard1 = geefKaart();
    var dealersCard2 = geefKaart();

    var youreCard1 = geefKaart();
    var youreCard2 = geefKaart();


    document.getElementById("dealersCard1").innerHTML = dealersCard1;
    document.getElementById("dealersCard2").innerHTML = dealersCard2;
    document.getElementById("youreCard1").innerHTML = youreCard1;
    document.getElementById("youreCard2").innerHTML = youreCard2;


}

function onHit() {

    if (document.getElementById("youreCard3").innerHTML == 0){

        document.getElementById("youreCard3").innerHTML = geefKaart();
    }else

        }

function geefKaart() {
    var random = Math.abs((Math.random() - 0.48) * 100);
    random = Math.trunc(random);

    return random;
}