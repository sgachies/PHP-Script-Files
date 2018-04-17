<pre>
<?php

require_once('parsecsv.lib.php');
$csv = new parseCSV();
$csv->conditions = 'title contains paperback OR title contains hardcover';
$csv->conditions = 'contact_name contains Nancy jkuat OR service_center contains 072-303-6463';
$csv->auto('sms.csv');


?>
</pre>

<style type="text/css" media="screen">
	table { background-color: #BBB; }
	th { background-color: #EEE; }
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