<?php
include "Animal.php";
include "Rabbit.php";
include "Tortoise.php";
include "Game.php";

$roger = new Rabbit("Roger Rabbit");
$roger2 = new Rabbit("Roger Rabbit 2");
$tortoise = new Tortoise("David Tortoise");
$tortoise2 = new Tortoise("David Tortoise 2");


$game = new Game();
$game->partipant_join($roger);
$game->partipant_join($roger2);
$game->partipant_join($tortoise);
$game->partipant_join($tortoise2);

$game->everyone_greet();

$game->everyone_prepare();

$game->everyone_result();


?>