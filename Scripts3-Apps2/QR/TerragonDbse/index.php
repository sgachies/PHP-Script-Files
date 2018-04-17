     
	 
	 <form action='index.php' method='GET' enctype="multipart/form-data">
	 <label>Enter code</label></br>
     <input type='text' name='text' id='text' /></br>
	 <input type='submit' name='generate' value='generate' id='generate'/>
	

<?php
    error_reporting (E_ALL ^ E_NOTICE);
	include("inc/connect.php");
	

	
    $qr=$_GET['text'];
	echo "<img src='qr/php/qr_img.php?d=$qr'>";
	
		//http://localhost/scripts2/QR/TerragonDbse/index.php
		$dir='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		$idx='index.php';
		$b='qr/php/qr_img.php?d=$qr';
		$urlImage=str_replace($idx,$b,$dir);
		
	    $image=file_get_contents($urlImage);
	    file_put_contents('uploads/'.$qr.'.jpg',$image);
		echo "<br><br>";
		
	mysql_query("INSERT INTO qrdata VALUES('','$qr','$urlImage')");
	echo "<br><br><br><br><br>";
    





 
?>

   



 