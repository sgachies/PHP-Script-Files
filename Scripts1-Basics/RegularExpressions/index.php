<?php

	$chairP ="John Thompson (CEO) Mark Summers (CFO) Betty Wu (CTO)";
	$noTitle=preg_split("%\s\(.{3}\)\s?%" , $chairP );

	foreach($noTitle as $found)
	{
		echo $found."<br /><br />";

	}

		echo "<br /><br />";

?>