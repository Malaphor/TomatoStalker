
window.addEventListener('load', function() {
	var tempHumCtx = document.getElementById("tempHumChart").getContext('2d');
	var sm1Ctx = document.getElementById("sm1Chart").getContext('2d');
	var sm2Ctx = document.getElementById("sm2Chart").getContext('2d');
	var sm3Ctx = document.getElementById("sm3Chart").getContext('2d');
	var sm4Ctx = document.getElementById("sm4Chart").getContext('2d');
	var sm5Ctx = document.getElementById("sm5Chart").getContext('2d');

	var tempHumChart = new Chart(tempHumCtx, {
		type: 'bar',
		data: {
			datasets: [{
				data: [0, 100],
				backgroundColor: [
					'rgba(255, 250, 0, 1)',
					'rgba(255, 0, 0, 1)'
				]
			}]
		},
		options: {
			title: {
				display: true,
				position: 'bottom',
				text: 'Temp & Humidity',
				fontSize: 18,
				fontColor: '#CCC'
			},
			legend: {
				display: false
			},
			tooltips: {
				enabled: false
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});
	var sm1Chart = new Chart(sm1Ctx, {
		type: 'doughnut',
		data: {
			labels: [''],
			datasets: [{
				label: '',
				data: [0, 100],
				backgroundColor: [
					'rgba(204, 39, 20, 0.6)',
					'#404040'
				],
				borderWidth: [0, 0]
			}]
		},
		options: {
			rotation: 0.75 * Math.PI,
			circumference: 1.5 * Math.PI,
			cutoutPercentage: 80,
			title: {
				display: true,
				position: 'bottom',
				text: 'Soil Moisture #1',
				fontSize: 18,
				fontColor: '#CCC',
				padding: 20
			},
			legend: {
				display: false
			},
			tooltips: {
				enabled: false
			},
			elements: {
				center: {
					text: 'Loading',
					color: '#CCC'
				}
			}
		}
	});

	function updateChart() {
		tempHumChart.data.datasets[0].data[0] = tempVal;
		tempHumChart.data.datasets[0].data[1] = humidityVal;
		tempHumChart.update();
	};
})
