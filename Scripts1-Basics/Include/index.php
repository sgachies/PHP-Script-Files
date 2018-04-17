<?php
/*include or require once required only jsut variation of those functions 
where the file contents only come once to the page
include or require similar
*/
   echo $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/common/header.php";
   include_once($path);
  
?>