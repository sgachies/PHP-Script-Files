<?php
 mysql_connect("localhost","root","");
 mysql_select_db("files");
 $sql1=mysql_query("SELECT * FROM download");
 while($array=mysql_fetch_assoc($sql1)){
 $download="";
 echo $array["name"]."<br>";
  
 }

?>

<hr site="1">
<a href="upload.php">upload a file</a>
