
var random;
var coins = document.getElementById("geld").innerHTML-1+1;
var inzet = document.getElementById("geldInput").value;

function EersteGetal(){
	random = parseInt(Math.random() * 13) + 1;
	document.getElementById('Getal1').innerHTML = random;
	document.getElementById('imgGetal1').src = "imagesBlackjack/" + random + "H.png";


}
function Hoger(){	
	document.getElementById('Getal1').innerHTML = random;
	document.getElementById('imgGetal1').src = "imagesBlackjack/" + random + "H.png";
	do{
		var random2 = parseInt(Math.random() * 13) + 1;
	}while(random == random2);
	document.getElementById('Getal2').innerHTML = random2;
	document.getElementById('imgGetal2').src = "imagesBlackjack/" + random2 + "H.png";

	if (random2 > random) {
		document.getElementById('Resultaat').innerHTML = "Gewonnen";
        bet(+inzet);
	}else{
		document.getElementById('Resultaat').innerHTML = "Verloren";
        bet(-inzet);
	}
			random = random2;
		
	

}
function Lager(){	
    
	document.getElementById('Getal1').innerHTML = random;
		document.getElementById('imgGetal1').src = "imagesBlackjack/" + random + "H.png";
	do{
		var random2 = parseInt(Math.random() * 13) + 1;
	}while(random == random2);
	document.getElementById('Getal2').innerHTML = random2;
		document.getElementById('imgGetal2').src = "imagesBlackjack/" + random2 + "H.png";

	if (random2 < random) {
		document.getElementById('Resultaat').innerHTML = "Gewonnen";
        bet(+inzet);
	}else{
		document.getElementById('Resultaat').innerHTML = "Verloren";
        bet(-inzet);
		}
			random = random2;

	
}

function inzetten(){
    inzet = document.getElementById("geldInput").value+1-1;
    console.log(inzet);
}


function bet(winst){
    
    console.log(coins);
    console.log(winst);
    coins += winst;
    document.getElementById("geld").innerHTML = coins;
    console.log("bet");
        document.getElementById("hidden").value = document.getElementById("geld").innerHTML;

    
}