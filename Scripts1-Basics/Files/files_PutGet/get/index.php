<?php
$text=file_get_contents('dbsefile.txt');
$textarray=explode("\n",$text);
$index=array_rand($textarray);
$randPhrase= $textarray[$index];
?>
<html>
<body>
<h1><?php echo $randPhrase; ?></h1>
</body>
</html>