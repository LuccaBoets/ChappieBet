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
        } else if (dealerTotalValue >= 17) {

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

                onStand();

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
                    console.log("isAce"+dealerTotalValue);


                }else {

                    document.getElementById("uikomstSpel").innerHTML = "Speler wint";

                    document.getElementById("dealerCard1").src = dealerCards[1];

                    //Page Reloads
                    myVar = setInterval(function (temp) {

                        location.reload();

                    }, 7000);
                }

            }

            break;

        }//forlus

        console.log("voor geefkeaart");

        dealerCards[i] = geefKaart();
        document.getElementById("dealerCard" + i).src = dealerCards[i];
        dealerTotalValue += calculateValueOfCard(dealerCards[i]);
        console.log(dealerTotalValue);

    }

}
