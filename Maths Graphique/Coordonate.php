<?php

// intersection avec une sphère

function int_sphere($x, $y, $z, $xv, $yv, $zv, $rayon) 
{
	$A = pow($xv, 2) + pow($yv, 2) + pow($zv, 2);
	$B = 2 * (($x * $xv) + ($y * $yv) + ($z * $zv));
	$C = (pow($x, 2) + pow($y, 2) + pow($z, 2)) - pow($rayon, 2);
	$delta = pow($B, 2) - (4 * $A * $C);
	echo "sphère de rayon ".$rayon."<br>";
	echo "droite passant par le point (".$x.", ".$y.", ".$z."), de vecteur directeur (".$xv.",".$yv.",".$zv.")<br />";
	if ($A == 0)
	    echo "Erreur, une division par zéro va être executée !!!<br />";
	else if ($delta > 0) 
	{
		echo "nombre de point d'intersection : 2<br />";
		$x1 = (((-$B) - sqrt($delta)) / (2 * $A));
		$x2 = (((-$B) + sqrt($delta)) / (2 * $A));
		$xp1 = $x + ($x1 * $xv);
		$yp1 = $y + ($x1 * $yv);
		$zp1 = $z + ($x1 * $zv);
		$xp2 = $x + ($x2 * $xv);
		$yp2 = $y + ($x2 * $yv);
		$zp2 = $z + ($x2 * $zv);
		echo "point 1 : (".number_format($xp1, 3).",  ".number_format($yp1, 3).",  ".number_format($zp1, 3).")<br />";
		echo "point 2 : (".number_format($xp2, 3).",  ".number_format($yp2, 3).",  ".number_format($zp2, 3).")<br />";
	} 
	else if ($delta == 0) 
	{
		if  ($A == 0)
			echo "Le vecteur directeur de D est nul !!<br />";
		echo "nombre de point d'intersection : 1<br />";
		$sp = -$B / (2 * $A);
		$xp = $x + ($sp * $xv);
		$yp = $y + ($sp * $yv);
		$zp = $z + ($sp * $zv);
		echo "point : (".number_format($xp, 3).", ".number_format($yp, 3).", ".number_format($zp, 3).")<br />";
	} 
	else
		echo "nombre de point d'intersection : 0<br />";
	echo '<br />';
}

function int_cylindre($x, $y, $z, $xv, $yv, $zv, $rayon) 
{
	$A = pow($xv, 2) + pow($yv, 2) + pow($zv, 2);
	$B = 2 * (($x * $xv) + ($y * $yv) + ($z * $zv));
	$C = pow($x, 2) + pow($y, 2) - pow($rayon, 2);
	$delta = pow($B, 2) - (4 * $A * $C);
	echo "cylindre de rayon ".$rayon."<br>";
	echo "droite passant par le point (".$x.", ".$y.", ".$z."), de vecteur directeur (".$xv.",".$yv.",".$zv.")<br />";
	if ($A == 0)
	    echo "Erreur, une division par zéro va être executée !!!<br />";
	else if ($delta > 0) 
	{
		echo "nombre de point d'intersection : 2<br />";
		$x1 = (((-$B) - sqrt($delta)) / (2 * $A));
		$x2 = (((-$B) + sqrt($delta)) / (2 * $A));
		$xp1 = $x + ($x1 * $xv);
		$yp1 = $y + ($x1 * $yv);
		$zp1 = $z + ($x1 * $zv);
		$xp2 = $x + ($x2 * $xv);
		$yp2 = $y + ($x2 * $yv);
		$zp2 = $z + ($x2 * $zv);
		echo "point 1 : (".number_format($xp1, 3).",  ".number_format($yp1, 3).",  ".number_format($zp1, 3).")<br />";
		echo "point 2 : (".number_format($xp2, 3).",  ".number_format($yp2, 3).",  ".number_format($zp2, 3).")<br />";
	} 
	else if ($delta == 0) 
	{
		if  ($A == 0)
			echo "Le vecteur directeur de D est nul !!<br />";
		echo "nombre de point d'intersection : 1<br />";
		$sp = -$B / (2 * $A);
		$xp = $x + ($sp * $xv);
		$yp = $y + ($sp * $yv);
		$zp = $z + ($sp * $zv);
		echo "point : (".number_format($xp, 3).", ".number_format($yp, 3).", ".number_format($zp, 3).")<br />";
	} 
	else
		echo "nombre de point d'intersection : 0<br />";
	echo '<br />';
}

function int_cone($x, $y, $z, $xv, $yv, $zv, $angle) 
{
	//$rad = deg2rad($angle);
	$rad = 90 - $angle;
	$rad = $rad * pi() / 180;
	$tan_rad = pow(tan($rad), 2);
	$A = pow($xv, 2) + pow($yv, 2) - (pow($zv, 2) * $tan_rad);
	$B = 2 * (($x * $xv) + ($y * $yv) - (($z * $zv) * $tan_rad));
	$C = pow($x, 2) + pow($y, 2) - (pow($z, 2) * $tan_rad);
	$delta = pow($B, 2) - (4 * $A * $C);
	echo "cône d'angle ".$angle." degrés<br>";
	echo "droite passant par le point (".$x.", ".$y.", ".$z."), de vecteur directeur (".$xv.",".$yv.",".$zv.")<br />";
	if ($A == 0)
	    echo "Erreur, une division par zéro va être executée !!!<br />";
	else if ($delta > 0) 
	{
		echo "nombre de point d'intersection : 2<br />";
		$x1 = (((-$B) - sqrt($delta)) / (2 * $A));
		$x2 = (((-$B) + sqrt($delta)) / (2 * $A));
		$xp1 = $x + ($x1 * $xv);
		$yp1 = $y + ($x1 * $yv);
		$zp1 = $z + ($x1 * $zv);
		$xp2 = $x + ($x2 * $xv);
		$yp2 = $y + ($x2 * $yv);
		$zp2 = $z + ($x2 * $zv);
		echo "point 1 : (".number_format($xp1, 3).",  ".number_format($yp1, 3).",  ".number_format($zp1, 3).")<br />";
		echo "point 2 : (".number_format($xp2, 3).",  ".number_format($yp2, 3).",  ".number_format($zp2, 3).")<br />";
	} 
	else if ($delta == 0) 
	{
		if  ($A == 0)
			echo "Le vecteur directeur de D est nul !!<br />";
		echo "nombre de point d'intersection : 1<br />";
		$sp = -$B / (2 * $A);
		$xp = $x + ($sp * $xv);
		$yp = $y + ($sp * $yv);
		$zp = $z + ($sp * $zv);
		echo "point : (".number_format($xp, 3).", ".number_format($yp, 3).", ".number_format($zp, 3).")<br />";
	} 
	else
		echo "nombre de point d'intersection : 0<br />";
	echo '<br />';
}

?>