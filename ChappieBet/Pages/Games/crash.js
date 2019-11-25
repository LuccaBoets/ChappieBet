var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [' ',' ',' '],
        datasets: [{
            label: '# of Votes',
            data: [],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(50, 10, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive : true,
        aspectRatio	: 1,
        maintainAspectRatio : true,
        responsiveAnimationDuration : 0,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
myChart.canvas.parentNode.style.width = '100%';
console.log("js");
var aftellen = 0.0;
var random; //  modal.style.display = "block";
var geld;
var cashoutStop;
var gewonnen = true;
var lock = false;
var inzet = document.getElementById("geld").value;



function randomGetal(){
    
    inzet = document.getElementById("geld").value;
    document.getElementById("geld").disabled = true;
    document.getElementById("myBtn").disabled = true;
    document.getElementById("Lock").disabled = false;
    document.getElementById("CashOut1").disabled = false;
    document.getElementById("AutoCash").disabled = true;
   
    var randomVoorBepalenRandom = Math.floor(Math.random() * 101);  

    if (randomVoorBepalenRandom < 70) {
        random = parseFloat(Math.random() * 1);
        random = Math.round(random * 100) / 100;
    }else if (randomVoorBepalenRandom < 80) {
        random = parseFloat(Math.random() * 2) + 1;
        random = Math.round(random * 100) / 100;
    }else if (randomVoorBepalenRandom < 90) {
        random = parseFloat(Math.random() * 3) + 2;
        random = Math.round(random * 100) / 100;
    }else if (randomVoorBepalenRandom < 95) {
        random = parseFloat(Math.random() * 4) + 3;
        random = Math.round(random * 100) / 100;
    }else{
        random = parseFloat(Math.random() * 10) + 3;
        random = Math.round(random * 100) / 100;
    }
	

	// if (random2 < 80) {
	// 	var random =  Math.round((Math.random() + 1) * 100) / 100;
	// } else {
	// 	var random =  Math.round(((Math.random() * 8) + 2) * 100) / 100;
	// }

	console.log(random);

    document.getElementById('resultaat').innerHTML = ("");
    document.getElementById("getal").innerHTML = "0";
    aftellen = 0;

	var x = setInterval(function() {
        
		aftellen = Math.round((aftellen + 0.01) * 100) / 100;
        myChart.data.datasets[0].data = [0,aftellen/10,aftellen];
        
        if (lock){
            clearInterval(x);
            if(document.getElementById("AutoCash").value == aftellen){
                winnen(inzet*aftellen);
            }
        }
        
		if (aftellen.toString().length - (Math.round(aftellen)).toString().length == 3) {
            
			document.getElementById("getal").innerHTML = aftellen;
            
		} else if (aftellen.toString().length - (Math.round(aftellen)).toString().length != 0) {
            
			document.getElementById("getal").innerHTML = aftellen + "0";
            
		} else {
            
			document.getElementById("getal").innerHTML = aftellen + ".00";
            
		}

		if (aftellen >= random) {
			console.log("STOP");
            if(gewonnen){
                winnen(-inzet); 
            }else{
                winnen(inzet);
            }
			clearInterval(x);
		}

        myChart.update();


	},50);


}
function CashOut(){
    console.log("inzet");
    console.log(inzet);
    console.log("aftellen");
    console.log(aftellen);
    if(aftellen < 1){
        console.log("ooo" + ((inzet*aftellen)-inzet));
        winnen((inzet*aftellen)-inzet);
    } else {
        winnen(inzet * aftellen);
    }

}

function Lock(){

    lock = !lock;
    if(lock){
        document.getElementById('resultaat').innerHTML = "Auto cash is on";
    } else {
           
    document.getElementById('resultaat').innerHTML = "Auto cash is off";
    }
    
}

function winnen(winst){
    console.log(winst);
    winst = Math.round((winst) * 100) / 100;
    console.log(winst);
    gewonnen = false;

    document.getElementById("geld").disabled = false;
    document.getElementById("myBtn").disabled = false;
    document.getElementById("Lock").disabled = false;
    document.getElementById("CashOut1").disabled = false;
    document.getElementById("AutoCash").disabled = false;
    document.getElementById("hidden").value = document.getElementById("totaalGeld").innerHTML;
    document.getElementById("totaalGeld").innerHTML = document.getElementById("totaalGeld").innerHTML-1+1  + winst;
    
    clearInterval(0);
    aftellen = 0;
    
}




























