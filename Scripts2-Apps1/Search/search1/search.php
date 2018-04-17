<?php
error_reporting (E_ALL ^ E_NOTICE);
$nm1=$_GET["nm"];
if($nm1==null)
{
echo "please select an item to search";
}
else{

mysql_connect("localhost","root","");
mysql_select_db("search");

$res=mysql_query("SELECT * FROM people WHERE username like ('$nm1%')");

echo "<table>";
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td>";
echo $row['id']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo $row['username']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo $row['gender']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo $row['age']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
echo "<a href=".$row['idlink'].">".$row['idlink']."</a>";
echo "</td>";
echo "</tr>";
}

echo "</table>";

}
?>