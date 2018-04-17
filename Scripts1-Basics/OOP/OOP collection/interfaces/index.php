<?php

require_once('interfaces/parsed.interface.php');
require_once('interfaces/compiled.interface.php'); 
require_once('interfaces/dotsyntax.class.php');
require_once('php.class.php');
require_once('java.class.php');
require_once('python.class.php');


$php = new PHP();
echo'<br>';
$python = new Python();
echo'<br>';
$java = new Java();


?>