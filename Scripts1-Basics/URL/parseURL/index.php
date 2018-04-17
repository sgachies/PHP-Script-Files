<?php

$url="http://localhost/scripts_2/url/parseURL/parse.php?code=1002&name=steve";
//print_r(parse_url($url));
//echo parse_url($url,PHP_URL_QUERY);

$parsedurl = parse_url($url,PHP_URL_QUERY);
parse_str($parsedurl);

echo 'code='.$code;   
echo '<br />';      
echo 'name='.$name;
?>