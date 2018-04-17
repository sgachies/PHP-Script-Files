<?php

require_once('character.class.php');
require_once('human.class.php');

$user = new Human();
echo $user->Attack(1,2);
echo $user->Setup(9,5);

?>