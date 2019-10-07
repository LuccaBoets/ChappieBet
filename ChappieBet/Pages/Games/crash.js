
function randomGetal(){
	var aftellen = 0;
	var aftellen1 = parseFloat(aftellen);
	var random = Math.random() * 50;
	var random1 = parseFloat(random);
	random1 = Math.round(random1 * 100) / 100;
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
