
var random;
var coins = document.getElementById("geld").innerHTML-1+1;
var inzet = document.getElementById("geldInput").value;



var x;


function EersteGetal(){
    document.getElementById('hoger').disabled = false;
    document.getElementById('lager').disabled = false;
	random = parseInt(Math.random() * 13) + 1;
	document.getElementById('imgGetal1').src = "imagesBlackjack/" + "default.png";
    document.getElementById('imgGetal2').src = "";   
    document.getElementById('Getal1').innerHTML = "";    
    document.getElementById('Getal2').innerHTML = "";
    document.getElementById('Resultaat').innerHTML = "";

    clearInterval(x);
    console.log("clear");



}
function Hoger(){	
    document.getElementById('hoger').disabled = true;
    document.getElementById('lager').disabled = true;
	document.getElementById('Getal1').innerHTML = "Dealer: " + random;
	document.getElementById('imgGetal1').src = "imagesBlackjack/" + random + "H.png";
	do{
		var random2 = parseInt(Math.random() * 13) + 1;
	}while(random == random2);
	document.getElementById('Getal2').innerHTML = "Uw getal is: " + random2;
	document.getElementById('imgGetal2').src = "imagesBlackjack/" + random2 + "H.png";
    

	if (random2 > random) {
		document.getElementById('Resultaat').innerHTML = "You Won!!!";
        bet(+inzet);
	}else{
		document.getElementById('Resultaat').innerHTML = "You Lost!!!";
        bet(-inzet);
	}
			random = random2;
		
	

}
function Lager(){	
    document.getElementById('hoger').disabled = true;
    document.getElementById('lager').disabled = true;
	document.getElementById('Getal1').innerHTML = "Dealer:" + random;
		document.getElementById('imgGetal1').src = "imagesBlackjack/" + random + "H.png";
	do{
		var random2 = parseInt(Math.random() * 13) + 1;
	}while(random == random2);
	document.getElementById('Getal2').innerHTML ="Your number is : " +  random2;
		document.getElementById('imgGetal2').src = "imagesBlackjack/" + random2 + "H.png";

	if (random2 < random) {
		document.getElementById('Resultaat').innerHTML = "You Won!!!";
        bet(+inzet);
	}else{
		document.getElementById('Resultaat').innerHTML = "You lost!!!";
        bet(-inzet);
		}
			random = random2;

	
}

function inzetten(){
    inzet = parseInt(document.getElementById("geldInput").value);
    console.log(inzet);
}


function bet(winst){
    x = setInterval(EersteGetal, 6000);

    console.log(coins);
    console.log(winst);
    coins += winst;
    document.getElementById("geld").innerHTML = coins;
    console.log("bet");
    document.getElementById("hidden").value = document.getElementById("geld").innerHTML;

    
}