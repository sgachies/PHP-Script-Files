<?php
//necessary compositon
//Its favourable to use compostion over inheritance which means its
//better to create a new object within an object than exetending it
//creates  a large hierarchy.
include'player.php';

include'action.php';


echo '<pre>';

$player =new Player();
echo '<br>';
$player->action('dodge',50);
echo '<br>';
$player->action('attack',500);
echo '<br>';
$player->action('',200);



?>