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

                    if(isThereAnAce){
                        playerTotalValue = 10;
                        break;
                    }else {

                        document.getElementById("testing").innerHTML = "That's a bust";
                        break;
                    }
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