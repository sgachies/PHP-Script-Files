<?php
echo substr('abcdef', 1);     // bcdef
echo '<br>';    
echo substr('abcdef', 1, 3);  // bcd
echo '<br>';    
echo substr('abcdef', 0, 4);  // abcd
echo '<br>';    
echo substr('abcdef', 0, 8);  // abcdef
echo '<br>';    
echo substr('abcdef', -1, 1); // f

// Accessing single characters in a string
// can also be achieved using "square brackets"
$string = 'abcdef';
echo $string[0];    		     // a
echo '<br>';    
echo $string[3];                 // d
echo '<br>';    
echo $string[strlen($string)-1]; // f

?>
