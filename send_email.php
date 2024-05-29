<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "contact@nicolas-caron.fr";
    $subject = "Nouveau message de contact";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès! Vous serez redirigé sous peu.";
    } else {
        echo "Erreur lors de l'envoi de l'email. Vous serez redirigé sous peu.";
    }

    // Redirection après 5 secondes
    header("refresh:5;url=index.html");
} else {
    echo "Méthode de requête non autorisée.";
    header("refresh:5;url=index.html");
}
?>
