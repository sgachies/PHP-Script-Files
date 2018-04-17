<?php


list($month, $year) = explode(',',date('m,Y'));

$calendar = pc_calendar($month, $year);

echo $calendar;

//user defined function
function pc_calendar($month, $year, $opts = ''){
	if(!is_array($opts)){
		$opts = array();
	}
	if(!isset($opts['month_link'])){
		$opts['month_link'] = '<a href="'.$_SERVER['PHP_SELF'].'?month=%d&year=%d">%s</a>';
	}
	
	list($this_month,$this_year,$this_day) = split(',',strftime('%m,%Y,%d'));     
	$day_highlight = (($this_month == $month) && ($this_year == $year));          
	list($prev_month,$prev_year) = split(',',strftime('%m,%Y',mktime(0,0,0,$month-1,1,$year)));     
	$prev_month_link = sprintf($opts['month_link'],$prev_month,$prev_year,'&lt;');          
	list($next_month,$next_year) = split(',',strftime('%m,%Y',mktime(0,0,0,$month+1,1,$year)));     
	$next_month_link = sprintf($opts['month_link'],$next_month,$next_year,'&gt;'); 
	
	
	?> 
    <table border="0" cellspacing="0" cellpadding="2" align="center">         
    <tr>                
     <td align="left">                         
	 <?php //print $prev_month_link ?>                 
     </td>                 
     <td colspan="5" align="center">
     <h2><?php print strftime('%B %Y',mktime(0,0,0,$month,1,$year)); ?>  </h2>               
     </td>                 
     <td align="right">                         
	 <?php //print $next_month_link ?>                 
     </td>         
     </tr>
<?php


$totaldays = date('t',mktime(0,0,0,$month,1,$year));       
// print out days of the week    
 print '<tr>';     
 $weekdays = array('Su','Mo','Tu','We','Th','Fr','Sa'); 
     
 while (list($k,$v) = each($weekdays)) {         
 	print '<td align="center">'.$v.'</td>';     
 }     
 print '</tr><tr>';    
  // align the first day of the month with the right week day     
  $day_offset = date("w",mktime(0, 0, 0, $month, 1, $year));     
  if ($day_offset > 0) {          
  	for ($i = 0; $i < $day_offset; $i++) { 
  		print '<td>&nbsp;</td>'; 
  	}     
  }     
  $yesterday = time() - 86400;       
  // print out the days     
  for ($day = 1; $day <= $totaldays; $day++) {         
  	$day_secs = mktime(0,0,0,$month,$day,$year);         
  	if ($day_secs >= $yesterday) {               
  		if ($day_highlight && ($day == $this_day)) {                 
  			print sprintf('<td align="center" bgcolor="%s">%d</td>',$opts['today_color'],$day);             
  		} 
		else { 
  			print sprintf('<td align="center">%d</td>',$day);             
  		}         
  	} 
	else {            
   		print sprintf('<td align="center">%d</td>',$day);         
   	}   
	      
   $day_offset++;          
   // start a new row each week //          
   if ($day_offset == 7) {             
   		$day_offset = 0;            
    	print "</tr>\n";             
		if ($day < $totaldays) { 
			print '<tr>'; 
		}         
	}     
} 
       
// fill in the last week with blanks //     
	if ($day_offset > 0) { 
		$day_offset = 7 - $day_offset; 
	}     
	if ($day_offset > 0) {          
		for ($i = 0; $i < $day_offset; $i++) { 
			print '<td>&nbsp;</td>'; 
		}     
	}     
		print '</tr></table>'; 
} 


?>

<table>
<tr><td>
<!-- Create a link to the main page-->
<a href="index.php">Back to main page</a>
</td></tr>
</table>