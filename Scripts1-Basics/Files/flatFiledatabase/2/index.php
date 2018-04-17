<?php
$myfile  = "flatfileDB.txt";
if(isset($_POST['ta'])){
 // nl2br function it takes new lines within the form takes newline  to break  even when there is space in between the two
 // htmlspecialchars function takes special html characters like <> and convert them to there html encoded equivalent
 
 $newData = nl2br(htmlspecialchars($_POST['ta']));
 $handle  = fopen($myfile, "w");
 fwrite($handle,$newData );
 fclose($handle);

}

?>


<?php

if(file_exists($myfile)){
	//display text file data preferred
	echo $myData = file_get_contents($myfile);
	
}

?>




<html>
<body>

Hello user you can use this form to edit the writing on your live website
<form action="index.php" method="POST">
<textarea name="ta" cols="64" rows="10"><?php echo str_replace("<br />","",$myData); ?> </textarea>
<br />
<input name ="submit" type="submit">

</form>
<br />
<br />
<br />
</body>

</html>


