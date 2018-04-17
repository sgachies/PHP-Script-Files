<?php
error_reporting (E_ALL ^ E_NOTICE);
mysql_connect("localhost","root","")or die(mysq_error());
mysql_select_db("tutorials")or die(mysq_error());

if(!isset($_GET['page']))
   $start=0;
  else $start=($_GET['page']-1)*5;


$res=mysql_query("SELECT * FROM people LIMIT $start,5");




?>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
<style>
li{display:inline;}
</style>
 </head>
<body>

<div align="center">
<h1>Data </h1>
<ol type="i">
<?php
while($row=mysql_fetch_array($res))
{
echo "<li>$row[id]...$row[username]...$row[gender]</li></br>";
}
?>
</ol>
<div class="pagination pagination-center">
<ul>

<li><a href="index.php?page=
				 <?php
                  if((isset($_GET['page']))&&($_GET['page']>1))
				       $prev=$_GET['page']-1;
				  else
				  $prev=1;
				  echo $prev;
				 ?>">prev</a></li>
				 
<li><a href="index.php?page=1">1</a></li>
<li><a href="index.php?page=2">2</a></li>
<li><a href="index.php?page=3">3</a></li>
<li><a href="index.php?page=
				 <?php
                  if(isset($_GET['page']))
				       $next=$_GET['page']+1;
				  else
				  $next=2;
				  echo $next;
				 ?>
				 ">next</a>
				 </li>
				 
				 
				 
				 
				 </ul>
</div>
</div>
</body>
</html>