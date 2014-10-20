

<div id="container">





	<div id="stats">
		<h1>Hunstanton</h1>
		<p id="loading">loading&hellip;</p>
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
				<th>Measured</th>
				<td id="measurement-date"></td>
			</tr>
		</table>

		<?php if (count($feed['channel']->item)): 

			$item = $feed['channel']->item[0];
		?>
		
		<div id="desktop-feed">
			<a href="<?php echo $item->link?>">
				<?php echo $item->title ?>
			</a>
			<?php echo $item->description; ?>
		</div>

		<?php endif; //(count($feed['channel']->item)): ?>
	</div>

	<div id="map-container">
		<img src="/img/map.png" id="map">
		<img src="/img/arrow.png" width="50" id="arrow">
	</div>

	<?php //debug($feed) ?>

	<div id="feed">

		<h2>Hunstanton Watersports News</h2>

		<ul id="watersports-news">
		<?php foreach($feed['channel']->item as $item): ?>

			<li>
				<a href="<?php echo $item->link; ?>">
					<?php echo $item->title; ?>
				</a>
				<?php echo $item->description; ?>
			</li>

		<?php endforeach; //($feed['channel']['item'] as $item):
		?>

		</ul>
	</div>

</div>