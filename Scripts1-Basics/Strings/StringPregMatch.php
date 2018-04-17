<?php

	$rndstr = "This is a  programming language lang called php web";

	preg_match_all('%la[nguage]{1,6}%',$rndstr ,$matchname);

		foreach($matchname as $match)
			{
			foreach($match as $found)
				{
					echo $found."<br /><br />";
				}

			}	

	echo "<br /><br />";


?>