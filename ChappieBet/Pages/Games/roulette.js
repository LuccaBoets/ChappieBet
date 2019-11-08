var mysql = require('mysql');

var bedrag = document.getElementById("beschikbareBedrag");
var numbersWhereBettedOn = [];
var extrasWhereBettedOn = [];

var zwarteGetallen = [];
var rodeGetallen = [];

function onStart()
{
	
	//Zwarte getallen array initialiseren
	zwarteGetallen.push(2);
	zwarteGetallen.push(4);
	zwarteGetallen.push(6);
	zwarteGetallen.push(8);
	zwarteGetallen.push(10);
	zwarteGetallen.push(11);
	zwarteGetallen.push(13);
	zwarteGetallen.push(15);
	zwarteGetallen.push(17);
	zwarteGetallen.push(20);
	zwarteGetallen.push(24);
	zwarteGetallen.push(22);
	zwarteGetallen.push(26);
	zwarteGetallen.push(29);
	zwarteGetallen.push(28);
	zwarteGetallen.push(31);
	zwarteGetallen.push(33);
	zwarteGetallen.push(35);

	//Rode getallen array initialiseren
	for (var i = 1; i <= 36; i++) {
		if (!zwarteGetallen.includes(i)) {
			rodeGetallen.push(i);
		}
	}
	document.getElementById("inzet").value = 0;
}

function onBetNumber(numberWhereBetOn)
{
    if (numbersWhereBettedOn.includes(numberWhereBetOn)) //Als er al op dit nummer is gegokt, verwijder het uit de array
    {
        numbersWhereBettedOn.splice(numbersWhereBettedOn.indexOf(numberWhereBetOn) , 1);
    }else
    {
    	if (numbersWhereBettedOn.length == 3) {
    		alert("U kan niet meer inzetten, u heeft al gegokt op het maximale aantal getallen. U heeft gegokt op " + numbersWhereBettedOn[0] + " , " + numbersWhereBettedOn[1] + " , " + numbersWhereBettedOn[2] + "." );
    	}else{
    		numbersWhereBettedOn.push(numberWhereBetOn);
        	alert("je hebt chips gezet op " + numberWhereBetOn);
    	}
    }
}

function onBetExtra(extraWhereBetOn)
{

	if (extrasWhereBettedOn.includes(extraWhereBetOn)) //als er nog niet is gegokt op deze nummer, voeg toe in array
    {
        extrasWhereBettedOn.splice(extrasWhereBettedOn.indexOf(extraWhereBetOn) , 1);
    }else
    {
        extrasWhereBettedOn.push(extraWhereBetOn);
        alert("je hebt chips gezet op " + extraWhereBetOn);
    }

}

function onBet(){

	var Random = Math.floor(Math.random() * 36);
	document.getElementById("gewordenGetal").innerHTML = Random;
	document.getElementById("rouletteSlider").value = Random;

	var inzet = document.getElementById("inzet").value;

	if (inzet < 1) {
	alert("Zet een positief rond getal in");
	}else{

		var nieuwbedrag = (parseInt(document.getElementById("beschikbareBedrag").innerHTML));

		var aantalInzetten = parseInt(numbersWhereBettedOn.length) + parseInt(extrasWhereBettedOn.length);

		console.log(parseInt(extrasWhereBettedOn.length));

		nieuwbedrag -= parseInt(inzet * aantalInzetten);

		if (numbersWhereBettedOn.includes(Random)) 
		{
			nieuwbedrag += parseInt(inzet * 35)
		}

		if (extrasWhereBettedOn.includes(112) && Random > 0 && Random <= 12) 
		{
			nieuwbedrag += parseInt(inzet * 3);
		}

		if (extrasWhereBettedOn.includes(212) && Random > 12 && Random <= 24) 
		{
			nieuwbedrag += parseInt(inzet * 3);
		}

		if (extrasWhereBettedOn.includes(312) && Random > 24 && Random <= 36) 
		{
			nieuwbedrag += parseInt(inzet * 3);
		}

		if (extrasWhereBettedOn.includes(118) && Random > 0 && Random <= 18) 
		{
			nieuwbedrag += parseInt(inzet * 2);
		}

		if (extrasWhereBettedOn.includes(1936) && Random > 18 && Random <= 36) 
		{
			nieuwbedrag += parseInt(inzet * 2);
		}

		if (extrasWhereBettedOn.includes(88) && (Random % 2 == 0)) 
		{
			nieuwbedrag += parseInt(inzet * 2);
		}

		if (rodeGetallen.includes(Random) && extrasWhereBettedOn.includes(500)) 
		{
			nieuwbedrag += parseInt(inzet * 2);
			console.log("rood juist")
		}

		if (zwarteGetallen.includes(Random) && extrasWhereBettedOn.includes(600)) 
		{
			nieuwbedrag += parseInt(inzet * 3);
			console.log("zwart juist")
		}

		if (extrasWhereBettedOn.includes(89) && (Random % 2 != 0)) 
		{
			nieuwbedrag += parseInt(inzet * 2);
			console.log("Odd")
		}

		numbersWhereBettedOn = [];
		extrasWhereBettedOn = [];
		document.getElementById("inzet").value = 0;

		if (nieuwbedrag < 0) {
			document.getElementById("beschikbareBedrag").innerHTML = 0;
		}else{
			document.getElementById("beschikbareBedrag").innerHTML = nieuwbedrag;
		}
	}
	
}