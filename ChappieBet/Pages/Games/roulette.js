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
	var number = //hier komt hoe je de waarde uit de HTML haalt

	if (numbersWhereBettedOn.includes(number)) 
	{
		numbersWhereBettedOn.pop(number);
	}else
	{
		numbersWhereBettedOn.push(number);
	}



}