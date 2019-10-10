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


function randomGetal(){

	var aftellen = 0.0;
	var random = parseFloat( Math.random() * 50);
	random = Math.round(random * 100) / 100;
	
	var random2 = Math.random() * 100;

	if (random2 < 80) {
		var random =  Math.round((Math.random() + 1) * 100) / 100;
	} else {
		var random =  Math.round(((Math.random() * 8) + 2) * 100) / 100;
	}

	console.log(random);


	var x = setInterval(function() {
		aftellen = Math.round((aftellen + 0.01) * 100) / 100;
        myChart.data.datasets[0].data = [0,aftellen/10,aftellen]

		if (aftellen.toString().length - (Math.round(aftellen)).toString().length == 3) {
            
			document.getElementById("getal").innerHTML = aftellen;
            
		} else if (aftellen.toString().length - (Math.round(aftellen)).toString().length != 0) {
            
			document.getElementById("getal").innerHTML = aftellen + "0";
            
		} else {
            
			document.getElementById("getal").innerHTML = aftellen + ".00";
            
		}
		if (aftellen == random) {
			console.log("STOP");
			clearInterval(x);
		}

        myChart.update();

	},50);

}


