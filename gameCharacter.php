<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Player Scores</h1>
<?php

	include('inc-game-character-object.php');

	$player1 = new GameCharacter();
	$player2 = new GameCharacter();

	$player1->setPlayerName('Billy');
	$player2->setPlayerName('Billy');

	$player1->setScore(100);
	$player2->setScore(99);

	
	if ($player1->getScore() > $player2->getScore()) {
			echo "Player 1 wins" ;
	}  elseif ($player1->getScore() < $player2->getScore()) {
		echo "Player 2 wins";
	}    else {
		echo "Tie";
	}

	
	
	// you can change the variables in the table if you need to use different names
	
?>
</body>
</html>