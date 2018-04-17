
<?php

	error_reporting (E_ALL ^ E_NOTICE);
	if(isset($_POST['submit']))
	{
			$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
			mysql_select_db("csv")or die("couldn't find database!");
			
			$filename='uploads/'. strtotime("now") .'.csv';
			
			
			//open the file 
			
			
			$sql=mysql_query("SELECT * FROM test ");
			$result=@mysql_query($sql);
			if($result)
		    {
			$num_rows=mysql_num_rows($sql);
		
			if($num_rows>=1)
			{
			
			$row=mysql_fetch_assoc($sql);
			$fp=fopen($filename,"w");
			$separator="";
			$comma="";
			//name is the header of the table i.e. fields
			foreach($row as $name => $value)
			{
				$separator .= $comma .'' .str_replace('','""',$name);
				$comma =",";
			}
			
			$separator .= "\n";
			
			
			
			fputs($fp,$separator);
			
			//value is the data from the table
			//mysql data seek to continue with the same query above
			mysql_data_seek($sql,0);
			
			while($row=mysql_fetch_assoc($sql))
			{
			$separator="";
			$comma="";
			
			foreach($row as $name => $value)
			{
				$separator .= $comma .'' .str_replace('','""',$value);
				$comma =",";
			}
			
			$separator .= "\n";
			fputs($fp,$separator);
			
			}
			//closing the file
			fclose($fp);
			}else{
			
			echo 'No records in the database';
			
			}
			
		}
		
	}
		
			

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
</head>

<body>

<form method="POST" action="#">
<input type="submit" name="submit" value="submit"/>
</form>
	





</body>

</html>