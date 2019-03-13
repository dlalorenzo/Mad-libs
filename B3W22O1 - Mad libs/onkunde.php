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
	<h2>ONKUNDE</h2>
</div>
<div class="container">
<?php

$kunnen = $opschieten = $fland = $vakantie = $besteeigenschap = $slechteeigenschap = $overkomen = "";
$kunnenErr = $opschietenErr = $flandErr = $vakantieErr = $besteeigenschapErr = $slechteeigenschapErr = $overkomenErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["kunnen"])) {
		$kunnenErr = "Verplicht in te voeren";
	} else {
		$kunnen = test_input($_POST["kunnen"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$kunnen)) {
     		 $kunnenErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["opschieten"])) {
		$opschietenErr = "Verplicht in te voeren";
	} else {
		$opschieten = test_input($_POST["opschieten"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$opschieten)) {
     		 $opschietenErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["fland"])) {
		$flandErr = "Verplicht in te voeren";
	} else {
		$fland = test_input($_POST["fland"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$fland)) {
     		 $flandErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["vakantie"])) {
		$vakantieErr = "Verplicht in te voeren";
	} else {
		$vakantie = test_input($_POST["vakantie"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$vakantie)) {
     		 $vakantieErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["besteeigenschap"])) {
		$besteeigenschapErr = "Verplicht in te voeren";
	} else {
		$besteeigenschap = test_input($_POST["besteeigenschap"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$besteeigenschap)) {
     		 $besteeigenschapErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["slechteeigenschap"])) {
		$slechteeigenschapErr = "Verplicht in te voeren";
	} else {
		$slechteeigenschap = test_input($_POST["slechteeigenschap"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$slechteeigenschap)) {
     		 $slechteeigenschapErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
   		}
	}

	if (empty($_POST["overkomen"])) {
		$overkomenErr = "Verplicht in te voeren";
	} else {
		$overkomen = test_input($_POST["overkomen"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$overkomen)) {
     		 $overkomenErr = "Alleen letters en hoofdletters a-Z mogelijk"; 
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
echo "er zijn veel mensen die niet kunnen ";echo $_POST["kunnen"];echo ". ";
echo "Neem nou ";echo $_POST["opschieten"];echo ". ";
echo "Zelfs met de hulp van een ";echo $_POST["vakantie"];echo " of zelfs ";echo $_POST["fland"];echo " kan ";echo $_POST["opschieten"];echo " niet ";echo $_POST["kunnen"];echo ". ";
echo "Dat heeft niet te maken met een gebrek aan ";echo $_POST["besteeigenschap"];echo ", ";echo "maar met een te veel aan ";echo $_POST["slechteeigenschap"];echo ". ";
echo "Te veel ";echo $_POST["slechteeigenschap"];echo " leidt tot ";echo $_POST["overkomen"];echo "en dat is niet goed als je wilt ";echo $_POST["kunnen"];echo ". ";
echo "Helaas voor ";echo $_POST["opschieten"];echo ".";

?>

</div>
<div class="voeter">
<footer class="footer">@2019 lorenzo meerman-99051451-  Applicatieontwikkeling niv. 4-2018</footer>
</div>
</body>
</html>