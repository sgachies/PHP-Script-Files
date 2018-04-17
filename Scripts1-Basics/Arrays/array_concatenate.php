<?php

function concatenate($elements, $delimiter = ', ', $finalDelimiter = ' and ') {
       $lastElement = array_pop($elements);
       return join($delimiter, $elements) . $finalDelimiter . $lastElement;
}

$array = array('John', 'Mary', 'Ishmal');
echo concatenate($array);

?>