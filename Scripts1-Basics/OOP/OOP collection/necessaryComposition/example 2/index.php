<?php
//necessary compositon
//Its favourable to use compostion over inheritance which means its
//better to create a new object within an object than exetending it
//creates  a large hierarchy.


include  ('player_action.php');
include  ('player.php');

echo '<pre>';

$player =new Player();
$player->action('dodge',50);
$player->action('attack',500);
$player->action('walk',200);



?>