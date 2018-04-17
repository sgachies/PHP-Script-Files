
<?php
	
	$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
	mysql_select_db("csv",$connect)or die("couldn't find database!");
	
	if(isset($_POST['submit']))
	{
		$file=$_FILES['file']['tmp_name'];
		
		$handle=fopen($file,"r");
		while(($fileop=fgetcsv($handle,1000,","))!=false)
		{
		    $name=$fileop[0];
			$phone=$fileop[1];
			$email=$fileop[2];
			
			$sql=mysql_query("INSERT INTO csvtomysql (name,phone,email)VALUES('$name','$phone','$email')");
		}
			if($sql)
			{
				echo 'Upload Successful!';
			}
		
	}
	
  
		

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

</head>

<body>
<div id="wrap">
<!--enctype Form is compartible to upload any data-->
<form method="post" action="index.php" enctype="multipart/form-data">
<input type="file" name="file"/>
<br/>
	<input type="submit" name="submit" value="submit"/>
</form>

</div>



</body>

</html>