
var ctx = document.getElementById("chartMRR").getContext('2d');
var chartMMR = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
		datasets: [{
			label: '# of votes',
			data: [143, 149, 158, 168, 189, 234, 268, 389, 467, 789, 924, 1332],
			backgroundColor: ['rgba(0, 0, 0, 0.15)'],
			borderColor: ['rgba(0, 0, 0, 0.6)'],
			borderWidth: 2
		}]
	},
	options:{
        responsive: true,
		scales:{
			yAxes: [{
				ticks: {
					beginAtZero: true
				}
			}]
		}
	}
});


//***************** **********************


var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
};

var config = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [213, 243, 122, 355, 120],
            backgroundColor: [
            'rgba(255, 99, 132, 0.8)',
            'rgba(255, 99, 132, 0.5)',
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 99, 132, 0.7)',
            'rgba(255, 99, 132, 0.3)'],
            label: 'Dataset 1'
        }],
        labels: [
            "Investor",
            "Pricing",
            "New Plataform",
            "Dissolutions",
            "Leads"
        ]
    },
    options: {
        responsive: true,
        legend: {
            position: 'top',
        },
        title: {
            display: false
        },
        animation: {
            animateScale: true,
            animateRotate: true
        }
    }
};

window.onload = function() {
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myDoughnut = new Chart(ctx, config);
};