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
</div>
<div class="container">
	<h2>Er heerst paniek...</h2>
</div>
<div class="container">
<?php

$huisdier = $belangrijk = $land = $vervelen = $speelgoed = $docent = $geld = $bezigheid = "";
$huisdierErr = $belangrijkErr = $landErr = $vervelenErr = $speelgoedErr = $docentErr = $geldErr = $bezigheidErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["huisdier"])) {
		$huisdierErr = "Verplicht in te voeren";
	} else {
		$huisdier = test_input($_POST["huisdier"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$huisdier)) {
     		 $huisdierErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["belangrijk"])) {
		$belangrijkErr = "Verplicht in te voeren";
	} else {
		$belangrijk = test_input($_POST["belangrijk"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$belangrijk)) {
     		 $belangrijkErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["land"])) {
		$landErr = "Verplicht in te voeren";
	} else {
		$land = test_input($_POST["land"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$land)) {
     		 $landErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["vervelen"])) {
		$vervelenErr = "Verplicht in te voeren";
	} else {
		$vervelen = test_input($_POST["vervelen"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$vervelen)) {
     		 $vervelenErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["speelgoed"])) {
		$speelgoedErr = "Verplicht in te voeren";
	} else {
		$speelgoed = test_input($_POST["speelgoed"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$speelgoed)) {
     		 $speelgoedErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["docent"])) {
		$docentErr = "Verplicht in te voeren";
	} else {
		$docent = test_input($_POST["docent"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$docent)) {
     		 $docentErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["geld"])) {
		$geldErr = "Verplicht in te voeren";
	} else {
		$geld = test_input($_POST["geld"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$geld)) {
     		 $geldErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["bezigheid"])) {
		$bezigheidErr = "Verplicht in te voeren";
	} else {
		$bezigheid = test_input($_POST["bezigheid"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$bezigheid)) {
     		 $bezigheidErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<br>";
echo "er heerst paniek in het koninkrijk ";echo $_POST["land"];echo ". Koning ";echo $_POST["docent"];echo " is ten einde raad en als koning ";echo $_POST["docent"];echo " ten einde raad is, dan roept hij zijn ten-einde-raadsheer ";echo $_POST["belangrijk"];echo ".";
echo "<br>";
echo "<br>";
echo $_POST["belangrijk"];echo "! ";echo "Het is een ramp! Het is een schande !";
echo "<br>";
echo "<br>";
echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?";
echo "<br>";
echo "<br>";
echo "Mijn ";echo $_POST["huisdier"];echo " is verdwenen! ";echo "Zo maar, zonder waarschuwing. ";echo "En ik had net ";echo $_POST["speelgoed"];echo " voor hem gekocht!";
echo "<br>";
echo "<br>";
echo "Majesteit, uw ";echo $_POST["huisdier"];echo " komt vast vanzelf weer terug?";
echo "<br>";
echo "<br>";
echo "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd ";echo $_POST["bezigheid"];echo " leren?";
echo "<br>";
echo "<br>";
echo "Maar Sire, daar kunt u toch uw ";echo $_POST["geld"];echo " voor gebruiken.";
echo "<br>";
echo "<br>";
echo $_POST["belangrijk"];echo ", je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had";
echo "<br>";
echo "<br>";
echo "Mij ";echo $_POST["vervelen"];echo ", Sire";

?>

</div>
<div class="voeter">
<footer class="footer">@2019 lorenzo meerman-99051451-  Applicatieontwikkeling niv. 4-2018</footer>
</div>
</body>
</html>