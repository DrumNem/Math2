<?php

//include 'Coordonate.php'

// check les options 

if (count($argv) == 9) 
{
	if ($argv[1] == 1)
	{
		if (is_numeric($argv[2]) && is_numeric($argv[3]) && is_numeric($argv[4]) &&
			is_numeric($argv[5]) && is_numeric($argv[6]) && is_numeric($argv[7]) && 
			is_numeric($argv[8]))
		{
			echo "sphère de rayon ".$argv[8]."\n";
			echo "droite passant par le point (".$argv[2].",".$argv[3].",".$argv[4]."), de vecteur directeur (".$argv[5].",".$argv[6].",".$argv[7].")\n";
		}
		else
		{
			echo "One of these arguments : ".$argv[2]." ".$argv[3]." ".$argv[4]." ".$argv[5]." ".$argv[6]." ".$argv[7]." ".$argv[8];
			exit(1);
		}
	}
	else if ($argv[1] == 2)
	{
		if (is_numeric($argv[2]) && is_numeric($argv[3]) && is_numeric($argv[4]) &&
			is_numeric($argv[5]) && is_numeric($argv[6]) && is_numeric($argv[7]) && 
			is_numeric($argv[8]))
		{
			echo "cylindre de rayon ".$argv[8]."\n";
			echo "droite passant par le point (".$argv[2].",".$argv[3].",".$argv[4]."), de vecteur directeur (".$argv[5].",".$argv[6].",".$argv[7].")\n";
		}
		else
		{
			echo "One of these arguments : ".$argv[2]." ".$argv[3]." ".$argv[4]." ".$argv[5]." ".$argv[6]." ".$argv[7]." ".$argv[8];
			exit(2);
		}
	}
	else if ($argv[1] == 3)
	{
		if (is_numeric($argv[2]) && is_numeric($argv[3]) && is_numeric($argv[4]) &&
			is_numeric($argv[5]) && is_numeric($argv[6]) && is_numeric($argv[7]) && 
			is_numeric($argv[8]))
		{
			echo "cône d'angle ".$argv[8]." degrés\n";
			echo "droite passant par le point (".$argv[2].",".$argv[3].",".$argv[4]."), de vecteur directeur (".$argv[5].",".$argv[6].",".$argv[7].")\n";
		}
			else
		{
			echo "One of these arguments : ".$argv[2]." ".$argv[3]." ".$argv[4]." ".$argv[5]." ".$argv[6]." ".$argv[7]." ".$argv[8];
			exit(4);
		}
	}
	else
	{
		echo "Invalid option : ".$argv[1];
		exit(5);
	}
}
else
{
	echo "Usage : {./104intersection} {option} {point1 rayon} {point2 rayon} {point3 rayon} {point1 vecteur} {point2 vecteur} {point3 vecteur} {argument's option}";
	exit(0);
}
?>