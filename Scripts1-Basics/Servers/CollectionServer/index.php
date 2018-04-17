<?php

//get the http connection http connection keep alive
echo $servercon=$_SERVER['HTTP_CONNECTION'];
echo '<br>';

//get the language
echo $serverLan=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo '<br>';

//get the http encoding
echo $serverEnc=$_SERVER['HTTP_ACCEPT_ENCODING'];
echo '<br>';

//get the http charset
echo $serverChr=$_SERVER['HTTP_ACCEPT_CHARSET'];
echo '<br>';

//get the document root
echo $serverRoot=$_SERVER['DOCUMENT_ROOT'];
echo '<br>';

//get the domain name or host address localhost
echo $serverAgent=$_SERVER['HTTP_USER_AGENT'];
echo '<br>';

//get the domain name or host address localhost
echo $serverPost=$_SERVER['HTTP_HOST'];
echo '<br>';

//get the web address /scripts3/server/arrayServer/index.php
echo $serverPHP=$_SERVER['PHP_SELF'];
echo '<br>';

//get URL parameters userid=2
echo $serverString=$_SERVER['QUERY_STRING'];
echo '<br>';

//get the full url
//get URL parameters http://localhost//server/index.php?userid=2
echo $serverString=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
echo '<br>';

//get the the port number
//http://localhost:80/scripts3/server/arrayServer/
echo 'http://'.$_SERVER['SERVER_NAME']
.':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
echo '<br>';

//http://localhost/scripts3/server
$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
echo dirname($url);






?>