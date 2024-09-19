<?php
session_start();    
// Si le formulaire n'est pas soumis, afficher la vue de contact
if (!isset($_POST['formulaire'])) {
    require('../vues/vueContact.php');
    exit();
}

// Récupérer et valider les données du formulaire
$firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
$sujet = isset($_POST['sujet']) ? trim($_POST['sujet']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';

// Vérification des champs du formulaire
if (!empty($firstname) && !empty($sujet) && !empty($email) && !empty($subject)) {
    $to = "mathieu.maia.art@gmail.com";
    $from = $email;

    // Préparer les en-têtes de l'e-mail
    $headers = "From: \"$firstname\" <$from>\n";
    $headers .= "Reply-To: $from\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";

    // Envoyer l'e-mail
    if (mail($to, $sujet, $subject, $headers)) {
        $_SESSION['reussite'] = 'Ton e-mail a bien été envoyé.';
        header('Location: accueil.php');
        exit();
    } else {
        $_SESSION['erreur'] = 'Erreur : l\'envoi de l\'e-mail a échoué. Veuillez réessayer.';
        header('Location: contact.php');
        exit();
    }
} else {
    $_SESSION['erreur'] = 'Erreur : tous les champs sont obligatoires.';
    header('Location: contact.php');
    exit();
}
?>
