<?php
echo "<h1>Welcome to the greetings page.</h1>";
print "<br><br>";

//initializing strings
$morning = "Good morning.";
$afternoon = "Good afternoon";
$evening = "Good evening";

//using the date function
$hour = date("H");

$hour_of_day = getdate();

$hour_of_day = "$hour_of_day[hours] : $hour_of_day[minutes]";

$vowels = 0;
$consonants =0;

//display morning greeting
if($hour<=12){
	echo $hour_of_day."hr&nbsp;&nbsp;".$morning;
	print "<br>";
	
	//printing vowels
	for ($i = 0, $j = strlen($morning); $i < $j; $i++){     
		if (strstr('aeiouAEIOU',$morning[$i])) { 
			echo $morning[$i];        
			$vowels++;     
		}
	} 
	
	print "<br>";
	
	//printing consonants
	for ($i = 0, $j = strlen($morning); $i < $j; $i++){     
		if (strstr('bcdfghjkmnpqrstvwxzBCDFGHJKMNPQRSTVWXZ',$morning[$i])) { 
			echo $morning[$i];        
			$consonants++;     
		}
	} 
}

//display afternoon greeting
else if($hour>12 and $hour<17){
	echo $hour_of_day."hr&nbsp;&nbsp;".$afternoon;
	print "<br>";
	
	//printing vowels
	for ($i = 0, $j = strlen($afternoon); $i < $j; $i++){     
		if (strstr('aeiouAEIOU',$afternoon[$i])) { 
			echo $afternoon[$i];        
			$vowels++;     
		}
	} 
	
	print "<br>";
	
	//printing consonants
	for ($i = 0, $j = strlen($afternoon); $i < $j; $i++){     
		if (strstr('bcdfghjkmnpqrstvwxzBCDFGHJKMNPQRSTVWXZ',$afternoon[$i])) { 
			echo $afternoon[$i];        
			$consonants++;     
		}
	} 
}

//display evening greeating
else{
	echo $hour_of_day."hr&nbsp;&nbsp;".$evening;
	print "<br>";
	
	//printing vowels
	for ($i = 0, $j = strlen($evening); $i < $j; $i++){     
		if (strstr('aeiouAEIOU',$evening[$i])) { 
			echo $evening[$i];        
			$vowels++;     
		}
	} 
	
	print "<br>";
	
	//printing consonants
	for ($i = 0, $j = strlen($evening); $i < $j; $i++){     
		if (strstr('bcdfghjkmnpqrstvwxzBCDFGHJKMNPQRSTVWXZ',$evening[$i])) { 
			echo $evening[$i];        
			$consonants++;     
		}
	} 
}

?>

<table>
<tr><td>
<!-- Create a link to the main page-->
<a href="index.php">Back to main page</a>
</td></tr>
</table>