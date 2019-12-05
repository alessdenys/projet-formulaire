<?php

if(isset($_POST['message'])){
$entete = 'MIME-Version: 1.0' . "\r\n";
$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$entete .= 'From: ' . $email . "\r\n";

$messageToSend = '

<p><b>Nom-Prénom : </b>' . $gender. " ". $name . '<br>
<b>Pays : </b>' .$country. '<br>
<b>Email : </b>' . $email . '<br>
<b>Sujet : </b>' . $subject. '<br>
<b>Message : </b>' . $message . '</p>';

$return = mail('belindaschepers1@gmail.com', 'Formulaire de contact', $messageToSend, $entete);
if($return) {
        echo '<p><b>Votre message a bien été envoyé.</b></p>';
            }
}
?>