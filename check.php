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
$name = $email = $surname = $country = $nickname = $message = "";
$nameErr = $emailErr = $surnameErr = $countryErr = $nicknameErr = $messageErr = "";
$mistake = [];
$honey = [];

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    array_push($honey,$nameErr);
  } else {
    $name = test_input($_POST["name"]);
    array_push($honey,$name);
  };

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    array_push($honey,$emailErr);
  } else {
    $email = test_input($_POST["email"]);
    array_push($honey,$email);
  }

  if (empty($_POST["surname"])) {
    $surnameErr = "surname is required";
    array_push($honey,$surnameErr);
  } else {
    $surname = test_input($_POST["surname"]);
    array_push($honey,$surname);
  }

  if (empty($_POST["country"])) {
    $countryErr = "country is required";
    array_push($honey,$countryErr);
  } else {
    $country = test_input($_POST["country"]);
    array_push($honey,$country);
  }

  if (empty($_POST["nickname"])) {
    $nicknameErr = "country is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    array_push($honey,$nickname);
  }

  if (empty($_POST["message"])) {
    $messageErr = "message is required";
    array_push($honey,$messageErr);
  } else {
    $message = test_input($_POST["message"]);
    array_push($honey,$message);
  };



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if (sizeof($honey) < 5) {
    echo "désole, nous ne parvenons pas à traiter les données suivantes : $mistake ";
  }
  elseif (sizeof($honey) == 5) {
    $headers = 'From:'. $email . "rn"; // Sender's Email
    $headers .= 'Cc:'. $email . "rn"; // Carbon copy to Sender
    $message = wordwrap($message, 70);
    mail("hackerspoullette@gmail.com", $message, $headers);
        echo "Your mail has been sent successfuly ! Thank you for your feedback";
  }
  else{
    echo "votre mail à bien été envoyé";
  }

?>


</body>
</html>

