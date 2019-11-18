//            

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

        if (document.getElementById("gegoktGetal1").innerHTML  == numberWhereBetOn){

            document.getElementById("gegoktGetal1").innerHTML = "";
        } else if (document.getElementById("gegoktGetal2").innerHTML  == numberWhereBetOn){

        	document.getElementById("gegoktGetal2").innerHTML = "";
        } else if (document.getElementById("gegoktGetal3").innerHTML == numberWhereBetOn){

            document.getElementById("gegoktGetal3").innerHTML = "";
        }
        numbersWhereBettedOn.splice(numbersWhereBettedOn.indexOf(numberWhereBetOn) , 1);
        
    }else
    {
        if (numbersWhereBettedOn.length == 3) {
            alert("U kan niet meer inzetten, u heeft al gegokt op het maximale aantal getallen. U heeft gegokt op " + numbersWhereBettedOn[0] + " , " + numbersWhereBettedOn[1] + " , " + numbersWhereBettedOn[2] + "." );
    	}else{

    		numbersWhereBettedOn.push(numberWhereBetOn);

            if (document.getElementById("gegoktGetal1").innerHTML == ""){

                document.getElementById("gegoktGetal1").innerHTML = numberWhereBetOn;
            } else if (document.getElementById("gegoktGetal2").innerHTML == ""){

                document.getElementById("gegoktGetal2").innerHTML = numberWhereBetOn;
            } else if (document.getElementById("gegoktGetal3").innerHTML == ""){

                document.getElementById("gegoktGetal3").innerHTML = numberWhereBetOn;
            }
    	}
    }
}

function onBetExtra(extraWhereBetOn)
{

	if (extrasWhereBettedOn.includes(extraWhereBetOn)) //als er nog niet is gegokt op deze nummer, voeg toe in array
    {
        extrasWhereBettedOn.splice(extrasWhereBettedOn.indexOf(extraWhereBetOn) , 1);

		if (document.getElementById("extra1").innerHTML == extraWhereBetOn){

			document.getElementById("extra1").innerHTML = "";
		} else if (document.getElementById("extra2").innerHTML == extraWhereBetOn){

			document.getElementById("extra2").innerHTML = "";
		} else if (document.getElementById("extra3").innerHTML == extraWhereBetOn){

			document.getElementById("extra3").innerHTML = "";
		}


    }else {
		extrasWhereBettedOn.push(extraWhereBetOn);
        if (document.getElementById("extra1").innerHTML == ""){

            switch (extraWhereBetOn) {


				case 112:
                    document.getElementById("extra1").innerHTML = "1st 12";
                    break;

                case 212:
                    document.getElementById("extra1").innerHTML = "2nd 12";
                    break;

                case 312:
                    document.getElementById("extra1").innerHTML = "3rd 12";
                    break;

                case 118:
                    document.getElementById("extra1").innerHTML = "1 to 18";
                    break;

                case 1936:
                    document.getElementById("extra1").innerHTML = "19 to 36";
                    break;

                case 88:
                    document.getElementById("extra1").innerHTML = "Even";
                    break;

                case 89:
                    document.getElementById("extra1").innerHTML = "Odd";
                    break;


                case 500:
                    document.getElementById("extra1").innerHTML = "Red";
                    break;

                case 600:
                    document.getElementById("extra1").innerHTML = "Black";
                    break;

				default:
                    document.getElementById("extra1").innerHTML = "ERROR";
                    break;
            }

        } else if (document.getElementById("extra2").innerHTML == ""){

            switch (extraWhereBetOn) {

                case 112:
                    document.getElementById("extra2").innerHTML = "1st 12";
                    break;

                case 212:
                    document.getElementById("extra2").innerHTML = "2nd 12";
                    break;

                case 312:
                    document.getElementById("extra2").innerHTML = "3rd 12";
                    break;

                case 118:
                    document.getElementById("extra2").innerHTML = "1 to 18";
                    break;

                case 1936:
                    document.getElementById("extra2").innerHTML = "19 to 36";
                    break;

                case 88:
                    document.getElementById("extra2").innerHTML = "Even";
                    break;

                case 89:
                    document.getElementById("extra2").innerHTML = "Odd";
                    break;

                case 500:
                    document.getElementById("extra2").innerHTML = "Red";
                    break;

                case 600:
                    document.getElementById("extra2").innerHTML = "Black";
                    break;

                default:
                    document.getElementById("extra2").innerHTML = "ERROR";
                    break;
            }

        } else if (document.getElementById("extra3").innerHTML == ""){

            switch (extraWhereBetOn) {

                case 112:
                    document.getElementById("extra3").innerHTML = "1st 12";
                    break;

                case 212:
                    document.getElementById("extra3").innerHTML = "2nd 12";
                    break;

                case 312:
                    document.getElementById("extra3").innerHTML = "3rd 12";
                    break;

                case 118:
                    document.getElementById("extra3").innerHTML = "1 to 18";
                    break;

                case 1936:
                    document.getElementById("extra3").innerHTML = "19 to 36";
                    break;

                case 88:
                    document.getElementById("extra3").innerHTML = "Even";
                    break;

                case 89:
                    document.getElementById("extra3").innerHTML = "Odd";
                    break;

                case 500:
                    document.getElementById("extra3").innerHTML = "Red";
                    break;

                case 600:
                    document.getElementById("extra3").innerHTML = "Black";
                    break;

                default:
                    document.getElementById("extra3").innerHTML = "ERROR";
                    break;
            }
        }
	}

}

function onBet(){

	var Random = Math.floor(Math.random() * 36);

    document.getElementById(Random.toString()).style.backgroundColor = "#08999e";

	var kleur = "Black";
	if (rodeGetallen.includes(Random)) {
		kleur = "Red";
	}

	document.getElementById("gewordenGetal").innerHTML = Random + " " + kleur;

	var inzet = document.getElementById("inzet").value;

	if (inzet < 1) {
	}else{

		var nieuwbedrag = (parseInt(document.getElementById("beschikbareBedrag").innerHTML));

		var aantalInzetten = parseInt(numbersWhereBettedOn.length) + parseInt(extrasWhereBettedOn.length);

		console.log(parseInt(extrasWhereBettedOn.length));

		nieuwbedrag -= parseInt(inzet * aantalInzetten);

		if (numbersWhereBettedOn.includes(Random)) 
		{
			nieuwbedrag += parseInt(inzet * (36 / numbersWhereBettedOn.length))
		}

		if (extrasWhereBettedOn.includes(112) && Random > 0 && Random <= 12) 
		{
			nieuwbedrag += parseInt(inzet * 2);
		}

		if (extrasWhereBettedOn.includes(212) && Random > 12 && Random <= 24) 
		{
			nieuwbedrag += parseInt(inzet * 2);
		}

		if (extrasWhereBettedOn.includes(312) && Random > 24 && Random <= 36) 
		{
			nieuwbedrag += parseInt(inzet * 2);
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
			nieuwbedrag += parseInt(inzet * 2);
			console.log("zwart juist")
		}

		if (extrasWhereBettedOn.includes(89) && (Random % 2 != 0)) 
		{
			nieuwbedrag += parseInt(inzet * 3);
			console.log("Odd")
		}

		switch (Random) {
            case 26: document.getElementById("rouletteWiel").style.transform = 'rotate(10deg)';break;
            case 3: document.getElementById("rouletteWiel").style.transform = 'rotate(20deg)';break;
            case 35: document.getElementById("rouletteWiel").style.transform = 'rotate(30deg)';break;
            case 12: document.getElementById("rouletteWiel").style.transform = 'rotate(40deg)';break;
            case 28: document.getElementById("rouletteWiel").style.transform = 'rotate(50deg)';break;
            case 7: document.getElementById("rouletteWiel").style.transform = 'rotate(60deg)';break;
            case 29: document.getElementById("rouletteWiel").style.transform = 'rotate(70deg)';break;
            case 18: document.getElementById("rouletteWiel").style.transform = 'rotate(80deg)';break;
            case 22: document.getElementById("rouletteWiel").style.transform = 'rotate(90deg)';break;
            case 9: document.getElementById("rouletteWiel").style.transform = 'rotate(100deg)';break;
            case 31: document.getElementById("rouletteWiel").style.transform = 'rotate(110deg)';break;
            case 14: document.getElementById("rouletteWiel").style.transform = 'rotate(120deg)';break;
            case 20: document.getElementById("rouletteWiel").style.transform = 'rotate(130deg)';break;
            case 1: document.getElementById("rouletteWiel").style.transform = 'rotate(140deg)';break;
            case 33: document.getElementById("rouletteWiel").style.transform = 'rotate(150deg)';break;
            case 16: document.getElementById("rouletteWiel").style.transform = 'rotate(160deg)';break;
            case 24: document.getElementById("rouletteWiel").style.transform = 'rotate(170deg)';break;
            case 5: document.getElementById("rouletteWiel").style.transform = 'rotate(180deg)';break;
            case 10: document.getElementById("rouletteWiel").style.transform = 'rotate(190deg)';break;
            case 23: document.getElementById("rouletteWiel").style.transform = 'rotate(200deg)';break;
            case 8: document.getElementById("rouletteWiel").style.transform = 'rotate(210deg)';break;
            case 30: document.getElementById("rouletteWiel").style.transform = 'rotate(220deg)';break;
            case 11: document.getElementById("rouletteWiel").style.transform = 'rotate(230deg)';break;
            case 36: document.getElementById("rouletteWiel").style.transform = 'rotate(240deg)';break;
            case 13: document.getElementById("rouletteWiel").style.transform = 'rotate(250deg)';break;
            case 27: document.getElementById("rouletteWiel").style.transform = 'rotate(260deg)';break;
            case 6: document.getElementById("rouletteWiel").style.transform = 'rotate(270deg)';break;
            case 34: document.getElementById("rouletteWiel").style.transform = 'rotate(280deg)';break;
            case 17: document.getElementById("rouletteWiel").style.transform = 'rotate(290deg)';break;
            case 25: document.getElementById("rouletteWiel").style.transform = 'rotate(300deg)';break;
            case 2: document.getElementById("rouletteWiel").style.transform = 'rotate(310deg)';break;
            case 21: document.getElementById("rouletteWiel").style.transform = 'rotate(320deg)';break;
            case 4: document.getElementById("rouletteWiel").style.transform = 'rotate(330deg)';break;
            case 19: document.getElementById("rouletteWiel").style.transform = 'rotate(340deg)';break;
            case 15: document.getElementById("rouletteWiel").style.transform = 'rotate(350deg)';break;
            case 32: document.getElementById("rouletteWiel").style.transform = 'rotate(360deg)';break;
            default: document.getElementById("rouletteWiel").style.transform = 'rotate(0deg)';break;

        }




        numbersWhereBettedOn = [];
		extrasWhereBettedOn = [];
		document.getElementById("inzet").value = 0;

        document.getElementById("gegoktGetal1").innerHTML = "";
        document.getElementById("gegoktGetal2").innerHTML = "";
        document.getElementById("gegoktGetal3").innerHTML = "";
        document.getElementById("extra1").innerHTML = "";
        document.getElementById("extra2").innerHTML = "";
        document.getElementById("extra3").innerHTML = "";


        if (nieuwbedrag < 0) {
			document.getElementById("beschikbareBedrag").innerHTML = 0;
		}else{

			document.getElementById("beschikbareBedrag").innerHTML = nieuwbedrag;
            document.getElementById("hidden").value = document.getElementById("beschikbareBedrag").innerHTML;
		}


	}
	
}