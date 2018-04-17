<?php
include('file.php');

if(isset($_REQUEST['check']))
{
echo strip_tags(htmlentities($_REQUEST['name']));
echo '<br/>';
echo htmlentities(strip_tags($_REQUEST['message']));
}

echo $url=$_SERVER['QUERY_STRING'];

?>

<form action="index.php" method="get">

	Name:   <input type="text" name="name" /></br>
	Message:<textarea name="message"></textarea></br>
		    <input type="submit" value="send messages" />
</form>