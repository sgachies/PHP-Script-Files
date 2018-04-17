<?php

$text = file_get_contents('flatfileDB.txt');
$textArray = explode("\n", $text);
//array_rand function that takes a random index from the file
//array_rand retuns a random numeric value
$randArrayIndexNum = array_rand($textArray);
//randPhrase holds actual values random phrase
$randPhrase = $textArray[$randArrayIndexNum];




?>


<html>
<body>
 <h2>I want my random phrase from php to display</h2>
 <h2><?php echo $randPhrase; ?></h2>
</body>

</html>
