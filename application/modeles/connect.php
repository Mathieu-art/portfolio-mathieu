<?php
function connect()
{
    // Informations de connexion de Pantheon
    $userName = 'pantheon';
    $pw = 'Vrh4hAm2QKSwRJYYMlzqDgrYhxIPYDba';
    $dbName = 'pantheon';
    $host = 'dbserver.dev.c96bc5ea-e306-40d2-bc72-5139e1ac562d.drush.in'; // Remplacez <site-id> par l'ID de votre site Pantheon

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbName", $userName, $pw);
        // Configure le mode d'erreur PDO pour lancer des exceptions
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        die();
    }
}
?>

