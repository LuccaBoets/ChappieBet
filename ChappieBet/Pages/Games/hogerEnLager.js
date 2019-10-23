var random;

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


	}else{
		document.getElementById('Resultaat').innerHTML = "Verloren";
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

	}else{
		document.getElementById('Resultaat').innerHTML = "Verloren";
		}
			random = random2;

	
}
