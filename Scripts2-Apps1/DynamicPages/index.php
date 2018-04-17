
  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">  

<html>
 <head>
 <title>Home</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/dynamic.css" rel="stylesheet">
  <script src="js/bootstrap.js"></script>

  
 </head>
  <body>
  <div id="wrap">
 <div class="well" align="center">
<div id="header"><h1>Dynamic Website</h1></div>

<div="menu">
<a href="index.php">Home</a>|
<a href="index.php?p=about">About</a>|
<a href="index.php?p=contacts">Contacts</a>|
<a href="index.php?p=news">News</a>
</div>
<hr>
<div id="content">
<?php
$pages_dir='pages';

if(!empty($_GET['p'])){
$pages =scandir($pages_dir,0);
unset($pages[0],$pages[1]);


$p=$_GET['p'];


if(in_array($p.'.inc.php',$pages)){

include($pages_dir.'/'.$p.'.inc.php');
}else{
echo 'Sorry,pages not found';
}
}else{
include($pages_dir.'/home.inc.php');
}
?>
</div>

</div>

  </body>
</html>
