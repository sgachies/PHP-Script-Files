<?php
error_reporting (E_ALL ^ E_NOTICE);
echo "<form id='form1' name='form1' action='index.php' method='GET'> 
	 <label>Enter code</label></br>
     <input type='text' name='text' id='text' /></br>
	 <input type='submit' value='submit' id='submit'/>
     </form>";
	 
	 $qrcode=$_GET['text'];

	 if(empty($_REQUEST['text'])){
		echo "";
	 }
	 else{
		echo "<img src='qr/php/qr_img.php?d=$qrcode'>";
		$url="http://localhost/scripts2/QR/terragonExample/qr/php/qr_img.php?d=$qrcode";
	    $image=file_get_contents($url);
	    file_put_contents('qrfiles/'.$qrcode.'.jpg',$image);
		echo $url=$_SERVER['QUERY_STRING'];
		
		}
		


		
		
	
	
?>





 