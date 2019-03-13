<!DOCTYPE html>
<html lang="nl">
<head>
	<link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/madlipss.css" type="text/css">
	<title>Mad Lips</title>
</head>
<body>

	<h1>MAD LIPS</h1>
<div class="lijst">
<ul>
	<li><a href="madlips-er-heerst-paniek.php">Er heerst paniek...</a></li>
	<li><a href="madlips-onkunde.php">Onkunde</a></li>
</ul>
</div >
<div class="container">
	<h2>Er heerst paniek...</h2>
</div>
<div class="container">
<form method="post" action="er-heerst-paniek.php">
<div class="form-group">
Welk dier zou je nooit als huisdier willen hebben? 		<input type="text" class="form-control" name="huisdier" value="<?php echo $huisdier;?>">
<span class="error"><?php echo $huisdierErr;?></span>
</div>
<div class="form-group">
Wie is de belangrijkste persoon in je leven?			<input type="text" class="form-control" name="belangrijk" value="<?php echo $belangrijk;?>">
<span class="error"><?php echo $belangrijkErr;?></span>
</div>
<div class="form-group">
In welk land zou je graag willen wonen?					<input type="text" class="form-control" name="land" value="<?php echo $land;?>">
<span class="error"><?php echo $landErr;?></span>
</div>
<div class="form-group">
Wat doe je als je je verveelt?							<input type="text" class="form-control" name="vervelen" value="<?php echo $vervelen;?>">
<span class="error"><?php echo $vervelenErr;?></span>
</div>
<div class="form-group">
Met welk speelgoed speelde je als kind het meest?		<input type="text" class="form-control" name="speelgoed" value="<?php echo $speelgoed;?>">
<span class="error"><?php echo $speelgoedErr;?></span>
</div>
<div class="form-group">
Bij welke docent spijbel je het liefst?					<input type="text" class="form-control" name="docent" value="<?php echo $docent;?>">
<span class="error"><?php echo $docentErr;?></span>
</div>
<div class="form-group">
Als je 100.000,- had, wat zou je dan kopen?				<input type="text" class="form-control" name="geld" value="<?php echo $geld;?>">
<span class="error"><?php echo $geldErr;?></span>
</div>
<div class="form-group">
Wat is je favoriete bezigheid?							<input type="text" class="form-control" name="bezigheid" value="<?php echo $bezigheid;?>">
<span class="error"><?php echo $bezigheidErr;?></span>
</div>
<input type="submit" name="submit" value="Versturen">
</form>
</div>
</div>
<div class="voeter">
<footer>@2019 lorenzo meerman-99051451-  Applicatieontwikkeling niv. 4-2018</footer>
</div>
</body>
</html>