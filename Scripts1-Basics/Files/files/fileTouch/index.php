<?php
// If this file is not on the server touch() will create it for you
$target = "information.txt"; 
touch($target);
// If the file exists it will be touched and access time changed on it
// to the current system default time

// Here is an example of using touch() to set specific access time
// - 7 days; 24 hours; 60 mins; 60secs
$accessTime = time() - (7 * 24 * 60 * 60); 
touch($target, $accessTime);
?>