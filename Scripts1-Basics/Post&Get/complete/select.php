<?php

//include the database connection file content
include("connection.php");
	
		$html = "<h2>Results</h2>";
		
		//define sql statement to select from database
		$sql = "SELECT * FROM personal";
		
		//execute the query and store the record set in the variable $result
		$result=mysql_query($sql) or die("couldn't select  ".mysql_error());
		
		//count the number of rows returned
		$num = mysql_num_rows($result);	
		
		//loop through the rows diplaying their content
		for ($i = 0; $i < $num; $i++)
		{	
			$html .= '<strong>First Name: </strong>'."&nbsp;&nbsp;".mysql_result($result,$i,"first_name");
			$html .= '<strong> Second Name: </strong>'."&nbsp;&nbsp;".mysql_result($result,$i,"second_name");
			$html .= '<strong> Age: </strong>'."&nbsp;&nbsp;".mysql_result($result,$i,"age");
			$html .= '<br/>';
	
		}
		
		 	//print the results on the browser
			echo $html;
?>

<table>
<tr><td>
<!-- Create a link to the main page-->
<a href="index.php">Back to main page</a>
</td></tr>
</table>
		
		
