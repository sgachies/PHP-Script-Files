<?php
//How to get the day 3 days from now:
$today = date("j");
$thisMonth = date("n");
$thisYear = date("Y");
echo "3 days from now -> ".date("F j Y", mktime(0,0,0, $thisMonth, $today+3, $thisYear))."<br>";
  
//1 week from now:
list($today,$thisMonth,$thisYear) = explode(" ", date("j n Y"));
echo "1 week from now -> ".date("F j Y", mktime(0,0,0, $thisMonth, $today+7, $thisYear))."<br>";
  
//4 months from now:
list($today,$thisMonth,$thisYear) = explode(" ", date("j n Y"));
echo "4 months from now -> ".date("F j Y", mktime(0,0,0, $thisMonth+4, $today, $thisYear))."<br>";
  
//3 years, 2 months and 35 days from now:
list($today,$thisMonth,$thisYear) = explode(" ", date("j n Y"));
echo "3 years 2 months and 35 days from now -> ".date("F j Y", mktime(0,0,0, $thisMonth+2, $today+35, $thisYear+3))."<br>";
?>