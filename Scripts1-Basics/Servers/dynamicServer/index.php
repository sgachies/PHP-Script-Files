<?php
//$_SERVER is predifined variable that allows users to access certain page request information 

include 'header.inc.php';
if(isset($_POST['submit'])){
echo $script_name.'</br>';
echo 'process 1';
}
?>