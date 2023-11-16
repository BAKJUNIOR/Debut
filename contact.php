<!doctype html>
<html lang="en">
<head>
    <title>Contact</title>
</head>
<body>
<?php

$to = "bakayokobassindoujunior@gmail.com";
$subject= "Utilisation du mail () avec php en local";
$message = "coucou je tu recoit se message c'est que j'ai recu mon projet";
$headers = "Content-Type: text/plain; charset=utf-8\r\n";
$headers .= "From: smtp.gmail.com";

 if (mail($to,$subject,$message,$headers))
     echo 'Envoyer !';
else
    echo "Erreur d'envoie";
/*
$retour = mail("bakbassjunior@gmail.com", "essai" , "coucou c'est junior" , "");
if ($retour){
    echo " L'Email a été envoyer ";
} else
    echo  " Erreur "*/
?>

</body>
</html>
