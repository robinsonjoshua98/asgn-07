<?php 
include('inc-alien-object.php');



$zurg = new Alien(8, 15, "orange"); 

echo("My new alien has ". $zurg->getEyes(). " eyes, " . $zurg->getTentacles() ." tentacles and is the color ". $zurg->getColor());