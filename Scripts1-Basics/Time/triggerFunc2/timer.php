<?php

//function trigger timer
function trigger()
{
$today = date("j");
$thisMonth = date("n");
$thisYear = date("Y");
return date("d-m-y h:i:s a" , mktime(21,13,00, $thisMonth, $today+0, $thisYear));
  }

?>