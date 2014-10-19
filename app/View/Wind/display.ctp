<div id="container">
	<div id="stats">
		<h1>Hunstanton</h1>
		<table>
			<tr>
				<th>Wind Speed</th>
				<td id="speed"></td>
			</tr>

			<tr>
				<th>Wind Direction</th>
				<td id="direction"></td>
			</tr>

			<tr>
				<th>Last Measurement</th>
				<td id="measurement-date"></td>
			</tr>
		</table>
	</div>

	<div id="map-container">
		<img src="/img/map.png" id="map">
		<img src="/img/arrow.png" width="50" id="arrow">
	</div>
</div>

<style type="text/css">
body {background:#B7D0D0}
th {text-align: left; padding:0.2em 0.5em;}
#container {max-width:1000px; float:right; position: relative;}
#stats {position: absolute;top:1em; left:1em; z-index: 2;}
#map-container {position: relative;}
#map {max-width: 100%;}
#arrow {position: absolute; top:50%; left:40%; display: none}
</style>