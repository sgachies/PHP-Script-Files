<?php
error_reporting (E_ALL ^ E_NOTICE);
?>

<?php
//Reverse string

$str='abcdefghijklmnopqrstuvwqyz0123456789';
$word='abcdefghijklmnopqrstuvwqyz';
$replacement='abc';
//string replace
echo str_replace($word,$replacement,$str);
echo "</br>";
$str = $_POST['str']; 
echo strrev($str); 


?>
<form action="?" method="post" enctype="multipart/form-data" >
<input name="str" type="str" />
<input name="submit" type="submit" value="submit" />
<div id="$str"></div>
</form>


