
<?php
	
	include_once("Coordonate.php");

	if (isset($_POST) && !empty($_POST)) {
		extract($_POST);
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="button.css" />
		<title>104intersection</title>
	</head>
	
	<body>
		<h1>Mathématiques: Projet 104 intersection</h1><br />
		<div id="arguments" style="width: 400px">
			<form method="post" id="form" action="104intersection.php">
				<fieldset>
					<legend> Intersection avec </legend>
					<input id="sphere" type="radio" name="option" value="1" required /><label for="sphere"><img src="tn_Sphère.jpg"> une Sphère</label><br />
					<input id="cylindre" type="radio" name="option" value="2" required /><label for="cylindre"><img src="tn_Cylindre1.jpg"> un Cylindre</label><br />
					<input id="cône" type="radio" name="option" value="3" required /><label for="cône"><img src="tn_cône1.jpg"> un cône</label><br />
				</fieldset>
				<fieldset>
					<legend> Coordonnées du point d'origine</legend>
					Enter a X : <input type="number" name="x1"  value="<?php if (isset($x1) && !empty($x1)) echo $x1; ?>" required /><br />
					Enter a Y : <input type="number" name="y1"  value="<?php if (isset($y1) && !empty($y1)) echo $y1; ?>" required /><br />
					Enter a Z : <input type="number" name="z1"  value="<?php if (isset($z1) && !empty($z1)) echo $z1; ?>" required /><br />
				</fieldset>
				<fieldset>
					<legend> Coordonnées du veteur directeur </legend>
					Enter a X : <input type="number" name="xv"  value="<?php if (isset($xv) && !empty($xv)) echo $xv; ?>" required /><br />
					Enter a Y : <input type="number" name="yv"  value="<?php if (isset($yv) && !empty($yv)) echo $yv; ?>" required /><br />
					Enter a Z : <input type="number" name="zv"  value="<?php if (isset($zv) && !empty($zv)) echo $zv; ?>" required /><br />
				</fieldset>
				<fieldset>
					<legend id="arg8"> Rayon ou angle (selon l'option) </legend>
					<input type="number" name="argumentoption"  value="<?php if (isset($argumentoption) && !empty($argumentoption)) echo "argumentoption"; ?>" required />
				</fieldset>
				<input class="bouton bleu" type="submit" name="button" value="Résultat" />
				<input class="bouton orange" type="reset" name="button2" value="Undo" />	
			</form>
		</div><br />
		</body>
		<div id="Presentation">
			<h3>Réalisé par :</h3>
			<ul id="liste">
				<li>Tiphaine Perra alias perra_t</li>
				<li>Florent Bertrand alias bertra_v</li>
			</ul><br />
			<?php
				if (isset($option) && isset($x1) && isset($y1) && isset($z1) && isset($xv) && isset($yv) && isset($zv) && isset($argumentoption))
				{
			?>

				<div id=Solution>

				Solution : 
					<fieldset>

			<?php


					if ($option == "1")
						int_sphere($x1, $y1, $z1, $xv, $yv, $zv, $argumentoption);
					else if ($option == "2")
						int_cylindre($x1, $y1, $z1, $xv, $yv, $zv, $argumentoption);
					else if ($option == "3")
						int_cone($x1, $y1, $z1, $xv, $yv, $zv, $argumentoption);
					else
						echo "No option selected";
			?>

					</fieldset>
					</div>
			<?php

				}
			?>
		</div>
	</body>
</html>