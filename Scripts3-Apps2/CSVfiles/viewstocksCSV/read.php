<pre>
<?php

require_once('parsecsv.lib.php');

$csv = new parseCSV();
$csv->conditions = 'open > 32 AND close < 33 ';


//$csv->conditions = 'rating < 4 OR author is John Twelve Hawks';
$csv->auto('yahoo.csv');


$csvdata = $csv->data;               
?>
</pre>

<style type="text/css" media="screen">
	table { background-color: #BBB; }
	th { background-color: #EE4; }
	td { background-color: #FFF; }
</style>
<table border="0" cellspacing="1" cellpadding="5" align="center">
	<tr>
		<?php foreach ($csv->titles as $value): ?>
		<th><?php echo $value; ?></th>
		<?php endforeach; ?>
	</tr>
	<?php foreach ($csv->data as $key => $row): ?>
	<tr>
		<?php foreach ($row as $value): ?>
		<td><?php echo $value; ?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>