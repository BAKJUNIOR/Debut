<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Le formulaire a été soumis

    if (isset($_POST['message'])) {
        // Validation et traitement des données (comme indiqué dans la réponse précédente)

        $to = $_POST['email'];
        $entete = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: smtp.gmail.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];
        $subject = $_POST['subject'];

        $message = '<h1>Message envoyé depuis la page Contact de GroupeLaroche.com</h1>
                                    <p>
                                    <b>Nom : </b>' . $_POST['nom'] . '<br>
                                    <b>Email : </b>' . $_POST['email'] . '<br>
                                    
                                    <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail($to, $subject, $message, $entete);
        $send = $retour;

        // vérification de l'envoi
        if ($send) {
            $_SESSION['succes_messages'] = "Message envoyé";
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Échec de l'envoi";
        }
    }
}


