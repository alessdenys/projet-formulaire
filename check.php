<?php

$nameBrut = $_POST['name'];
$name=filter_var($nameBrut, FILTER_SANITIZE_STRING);

$emailBrut= $_POST['email'];
$email = filter_var ($emailBrut, FILTER_SANITIZE_EMAIL);

$countryBrut = $_POST['country'];
$country = filter_var($countryBrut, FILTER_SANITIZE_STRING);

$messageBrut = $_POST['message'];
$message=filter_var($messageBrut, FILTER_SANITIZE_STRING);

?>