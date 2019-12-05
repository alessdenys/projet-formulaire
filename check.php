<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>checking</title>
</head>
<body>
<?php
// define variables and set to empty values
$name = $email = $surname = $country = "";
$nameErr = $emailErr = $surnameErr = $countryErr = "";

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["surname"])) {
    $surnameErr = "surname is required";
  } else {
    $surname = test_input($_POST["surname"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = "country is required";
  } else {
    $country = test_input($_POST["country"]);
  }



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>

<p> <?php echo "$name" ?></p>
</body>
</html>

