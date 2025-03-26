<?php
// Activer l'affichage des erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire et sécurisation
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse email de réception
    $destinataire = "jirehmvoutou@gmail.com"; // Ton email de réception

    // Sujet du mail
    $sujet = "Nouveau message de $nom depuis le site www.brownsine.com";

    // Corps du mail
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n\n";
    $contenu .= "Message:\n$message\n";

    // En-têtes du mail
    $headers = "From: no-reply@brownsine.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Test d'envoi de l'email avec affichage d'er
