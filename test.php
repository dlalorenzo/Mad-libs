<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
 <link rel="stylesheet" href="css/lab1-style.css" type="text/css">

<?php

$nameErr = $emailErr = $genderErr =  "";
$name = $email = $gender =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $nameErr = "De naam is verplicht";
    } else {
        $name = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z ]$/",$name)) {
              $nameErr = "alleen letters toegstaan"; 
           }
    }

    if (empty($_POST["email"])) {
        $emailErr = "E-mail-adress is verplicht";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "ongeldig email-adress "; 
        }
    }
}

if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h1>Welkom bij Lab 3</h1>

<p><span class="error"> required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  First name:<br>
  <input type="text" name="firstname" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
  E-mail-adress:<br>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br>

   Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">

</form>

<?php

echo "<h2>De ingevulde gegevens zijn:</h2>";
echo "<br>";
echo $_POST["firstname"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
echo $gender;

?>
</body>
</html>
