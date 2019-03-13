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
	<h2>ONKUNDE</h2>
</div>
<div class="container">
<form method="post" action="onkunde.php">
<div class="form-group">
Wat zou je graag willen kunnen? 					<input type="text" class="form-control" name="kunnen" value="<?php echo $kunnen;?>">
<span class="error"><?php echo $kunnenErr;?></span>
</div>
<div class="form-group">
Met welke persoon kun je goed opschieten			<input type="text" class="form-control" name="opschieten" value="<?php echo $opschieten;?>">
<span class="error"><?php echo $opschietenErr;?></span>
</div>
<div class="form-group">
Wat is je favoriete getal?							<input type="text" class="form-control" name="fland" value="<?php echo $fland;?>">
<span class="error"><?php echo $flandErr;?></span>
</div>
<div class="form-group">
Wat heb je altijd bij je als je op vakantie gaat?	<input type="text" class="form-control" name="vakantie" value="<?php echo $vakantie;?>">
<span class="error"><?php echo $vakantieErr;?></span>
</div>
<div class="form-group">
Wat is je beste persoonlijke eigenschap?			<input type="text" class="form-control" name="besteeigenschap" value="<?php echo $besteeigenschap;?>">
<span class="error"><?php echo $besteeigenschapErr;?></span>
</div>
<div class="form-group">
Wat is je slechtste persoonlijke eigenschap?		<input type="text" class="form-control" name="slechteeigenschap" value="<?php echo $slechteeigenschap;?>">
<span class="error"><?php echo $slechteeigenschapErr;?></span>
</div>
<div class="form-group">
Wat is het ergste dat je kan overkomen? 			<input type="text" class="form-control" name="overkomen" value="<?php echo $overkomen;?>">
<span class="error"><?php echo $overkomenErr;?></span>
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