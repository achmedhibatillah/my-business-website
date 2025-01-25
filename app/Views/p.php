<!DOCTYPE html>
<html>
<head>
<title>3d Pie Chart JavaScript with Google Charts</title>
<link rel='stylesheet' href='style.css' type='text/css' />

<script type="text/javascript"
    src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {
		packages : [ "corechart" ]
	});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
				[ 'Animal', 'Distribution' ], [ 'Horse', 11 ],
				[ 'Elephant', 2 ], [ 'Tiger', 2 ], [ 'Lion', 2 ],
				[ 'Jaguar', 7 ] ]);

		var options = {
			title : '3d Pie Chart JavaScript with Google Charts',
			is3D : true,
		};

		var chart = new google.visualization.PieChart(document
				.getElementById('3d-pie-chart'));
		chart.draw(data, options);
	}
</script>
</head>
<body>
    <div class="phppot-container">
        <h1>3d Pie Chart JavaScript with Google Charts</h1>
        <div id="3d-pie-chart" style="width: 700px; height: 500px;"></div>
    </div>
</body>
</html>