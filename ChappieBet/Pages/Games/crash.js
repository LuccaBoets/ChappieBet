
function randomGetal(){

	var aftellen1 = 0.0;
	var random = Math.random() * 50;
	var random1 = parseFloat(random);
	random1 = Math.round(random1 * 100) / 100;
	
	var random2 = Math.random() * 100;

	if (random2 < 80) {
		var random1 =  Math.round(((Math.random() * 2) + 1) * 100) / 100;
	} else {
		var random1 =  Math.round(((Math.random() * 8) + 2) * 100) / 100;
	}

	console.log(random1);

	var x = setInterval(function() {
		aftellen1 = Math.round((aftellen1 + 0.01) * 100) / 100;

		if (aftellen1.toString().length - (Math.round(aftellen1)).toString().length == 3) {
			document.getElementById("getal").innerHTML = aftellen1;
		} else if (aftellen1.toString().length - (Math.round(aftellen1)).toString().length != 0) {
			document.getElementById("getal").innerHTML = aftellen1 + "0";
			console.log(aftellen1.toString().length - (Math.round(aftellen1)).toString().length);
		} else {
			document.getElementById("getal").innerHTML = aftellen1 + ".00";
		}
		if (aftellen1 == random1) {
			console.log("STOP");
			clearInterval(x);
		}
	},50);


	//}
	

	document.getElementById("getal").innerHTML = aftellen1;
}
