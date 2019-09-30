
function randomGetal(){
	var aftellen = 0;
	var aftellen1 = parseFloat(aftellen);
	var random = Math.random() * 501;
	var random1 = parseFloat(random);
	random1 = Math.round(random1 * 100) / 100;

	while(aftellen1 != random1){
		aftellen1 = aftellen1 + 0.01;
		document.getElementById("getal").innerHTML = aftellen1;


	}
	//document.write(random1);
	

	document.getElementById("getal").innerHTML = aftellen1;
}
