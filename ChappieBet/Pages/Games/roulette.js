var bedrag = document.getElementById("beschikbareBedrag");
var

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

function onBetNumber()
{
	var numbersWhereBettedOn = []
	var isGeselecteerd = false;

	for (var i = 0; i < 37; i++)
	{

		if (document.getElementById(i).checked == true)
		{
            if (numbersWhereBettedOn.includes(number)) //als er nog niet is gegokt op deze nummer, voeg toe in array
            {
                numbersWhereBettedOn.pop(number);
            }else
            {
                numbersWhereBettedOn.push(number);
            }

        }
	}


}

function onBetEvenOrUneven(){

	var even = document.getElementById("even").checked;
	var uneven = document.getElementById("uneven").checked;

}

function onBet(){

	startWinningWheel();

}