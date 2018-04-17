	<script type="text/javascript" language="javascript">
	Cufon.replace('h2');
	</script>
	<?php
	  //preparing our variables
	  $future= 1307479797;
	  $current=  time();
	  $diff=     $future-$current;

		$minutes=  floor($diff/60);
		$hours=    floor($diff/3600);
		
		$r_minutes=   floor(($diff-($hours * 3600))/60);
		$r_seconds=   floor($diff-($minutes * 60));
		
		echo '<h2>'.$hours.':'.$r_minutes.':'.$r_seconds.'</h2>';
	  ?>


