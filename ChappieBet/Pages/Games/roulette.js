var bedrag = document.getElementById("beschikbareBedrag");
var numbersWhereBettedOn = []
var extrasWhereBettedOn = []
function onStart()
{
	
	//Zwarte getallen array initialiseren
	var zwarteGetallen = [];
	var count = 1;
	for (var i = 1; i <= 18; i++)
	{
		count += 2;
		zwarteGetallen.push(count); 	
	}

	//Rode getallen array initialiseren
	var rodeGetallen = [];
	count = 2;
	for (var i = 2; i <= 18; i++)
	{
		count += 2;
		rodeGetallen.push(i); 	
	}
}

function onBetNumber(numberWhereBetOn)
{
	
    if (numbersWhereBettedOn.includes(numberWhereBetOn)) //als er nog niet is gegokt op deze nummer, voeg toe in array
    {
        numbersWhereBettedOn.splice(numbersWhereBettedOn.indexOf(numberWhereBetOn) , 1);
    }else
    {
        numbersWhereBettedOn.push(numberWhereBetOn);
    }

    console.log(numbersWhereBettedOn);

}

function onBetExtra(extraWhereBetOn)
{

	if (extrasWhereBettedOn.includes(extraWhereBetOn)) //als er nog niet is gegokt op deze nummer, voeg toe in array
    {
        extrasWhereBettedOn.splice(extrasWhereBettedOn.indexOf(extraWhereBetOn) , 1);
    }else
    {
        extrasWhereBettedOn.push(extraWhereBetOn);
    }

}

function onBet(){

	console.log("dazdz")
	var Random = Math.floor(Math.random() * 36);
	document.getElementById("gewordenGetal").innerHTML = Random;
	document.getElementById("rouletteSlider").value = Random;

	var inzet = document.getElementById("inzet").value;
	var nieuwbedrag =(parseInt(document.getElementById("beschikbareBedrag").innerHTML));

	if (extrasWhereBettedOn.includes(112) && Random > 0 && Random <= 12) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(212) && Random > 12 && Random <= 24) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(312) && Random > 24 && Random <= 36) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(118) && Random > 0 && Random <= 18) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(1936) && Random > 18 && Random <= 36) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(88) && (Random % 2 == 0)) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(1) && (Random % 2 != 0)) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(2) && (Random % 2 == 0)) 
	{
		nieuwbedrag += parseInt(inzet);
	}

	if (extrasWhereBettedOn.includes(89) && (Random % 2 != 0)) 
	{
		nieuwbedrag += parseInt(inzet);
	}




	document.getElementById("beschikbareBedrag").innerHTML = nieuwbedrag;
}