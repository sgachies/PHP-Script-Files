<?php
// __LINE__ Returns the current line number of the file.  
//echo __LINE__;

//echo "<br />";

// __FILE__  Returns the full path and filename of the file. If used inside an include, the name of the included file is returned. 
//echo __FILE__;

//echo "<br />";

// __FUNCTION__  Returns the function name the code is currently executing inside of
//echo __FUNCTION__;

//echo "<br />";

// __CLASS__ The class name. As of PHP 5 this magic constant returns the class name as it was declared.
//echo __CLASS__;

//echo "<br />";

// define(constant_name, value, case_sensitive=true);
define("AUTHOR_NAME", "Adam Khoury", true);
echo "The person that created this web page is named " . AUTHOR_NAME . ".";

echo "<br />";
echo __LINE__;

echo "<br />";
echo __FILE__;




?>
