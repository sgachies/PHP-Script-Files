
<?php
error_reporting (E_ALL ^ E_NOTICE);
 ?>
 
<?php
$tickercode=strtolower(strip_tags($_POST['tickercode']));
$submit=$_POST['submit'];

$file="test.txt";
$handle=fopen($file,'w');
$data = $tickercode;

fwrite($handle,$data);
print "Data written";
fclose($handle);
echo $tickercode; 
?>

<html>
<head></head>
<link href="css/bootstrap.css">
<body>

<div class="well">


    <form class="form-search" action="test.php" method="post">
    <select class="span2" name="tickercode">
				<option></option>
				<option>GOOG</option>
				<option>YHOO</option>
				<option>ADBE</option>
	</select>
    <button class="btn btn-primary" type="submit" name="submit" id="submit">input</button>
    </form>
	
	
</div>
</body>
</html>