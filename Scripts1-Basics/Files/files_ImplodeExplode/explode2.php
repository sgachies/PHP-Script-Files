

<?php
//explode this afunction thats  explodes a varaible into an array

if(isset($_POST['chapter'])){
$line =explode("\n",$_POST['chapter']);

foreach($line as $key=>$line){
if($key>0){
list(,,$title,$desc,$time) = explode("",$line);
if($title){
     list($hour,$minute,$second,$frame)=explode(":",$time);
	 $time=($hours*60*60)+($minutes*60)+$seconds+($frames/12);
     echo $line;

			}
		}

	}

}

?>