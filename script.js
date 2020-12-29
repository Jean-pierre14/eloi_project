//this is for able to see chart
var options = {
	series: [
		{
			name:"Net Profit",
			data: [44,55,57,56,61,58,63,60,66],
		},
		{
			name "Revenue",
			data: [78,85,101,98,87,105,91,114,94],

		},
		{
			name: "Free Cash Flow",
			data: [35,41,3626,45,48,52,53,41],
		},
		chart: {
			type: "bar",
			height: 250,
			sparkline: {
				enabled: true,
			},
		},
		plotOptions: {
			bar: {
				horizintal: false,
				columnWidth: "55%",
				endingShape: "rounded",
			},
		},
		dataLabels: {
			enabled: false,
		},
		stroke: {
			show: true,
			width:2,
			colors: ["transparent"],
		},
		xaxis: {
			categories: ["Feb","Mar","May","Jun","Jul","Aug","Sep","Oct"],
		},
		yaxis: {
			title: {
				text: "$ (thousands)",
			},
		},
		fill: {
			opacity: 1,

		},
		tooltip: {
			y: {
				formatter: function (val) {
					return "$"+val "thousands";
				},
			},
		},
	};
	var chart = new ApexCharts(document.querySelector("#apex1"),options);
	chart.render();