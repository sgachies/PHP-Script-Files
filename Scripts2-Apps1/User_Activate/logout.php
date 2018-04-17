<?php
session_start();
session_destroy();


echo "you have been logged out
	<a href='index.php'>click here </a>to return to main page";

?>