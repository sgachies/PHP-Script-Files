<?php
  include('connect.php');
  
  $id=stripslashes($_REQUEST['id']);
  $image=mysql_query("SELECT * FROM dbimage WHERE id=$id");
  $image=mysql_fetch_assoc($image);
  $image=$image['image'];
  
  header("Content-type: image/jpeg");
  
  echo $image;
 
?>
