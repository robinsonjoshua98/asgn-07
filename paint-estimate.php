<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	include("inc-rectangle-object.php");

	$height = $_POST["height"];
	$length = $_POST["length"];
	$width = $_POST["width"];

	$longWall = new Rectangle ();
	$shortWall = new Rectangle ();

	$longWall->setX(trim($height));
	$longWall->setY(trim($length));

	$shortWall->setX($height);
	$shortWall->setY($width);


	$longArea = $longWall->getArea();

	$shortArea = $shortWall->getArea();

	// echo ("$longArea<br>");
	// echo ("$shortArea");

	$totalArea = ($shortArea + $longArea * 2);

	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>