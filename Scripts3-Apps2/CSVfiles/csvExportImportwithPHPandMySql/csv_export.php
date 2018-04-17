<?php
include('inc/dbConnect.inc.php');
$sql="select * from csv_data";
$res = mysql_query($sql);
$num=mysql_num_rows($res);
if($num > 0){
	echo 'S.No,Name,Phone,Email';
	echo "\r\n";
	$i=1;
	while($row=mysql_fetch_array($res)){
		echo $i.','.$row['name'].','.$row['phone'].','.$row['city'];
		echo "\r\n";
		$i++;
	}
}else{
	echo 'No Data Found';
}
$filename=date('d-m-y').'-export-report.csv';
header( 'Content-Type: text/csv' ); 
header( 'Content-Disposition: attachment;filename='.$filename);

?>