<?php
require_once '../config/appConfig.php';
require_once '../config/globalConfig.php';



if (isset($_POST['nomClub']) && isset($_POST['location']) && isset($_POST['ID']) && isset($_POST['Gerants']) && isset($_POST['date_creation']) && isset($_FILES['nbjoueurs'])) {
    $nom_club = $_POST['nomClub'];
    $locationClub = $_POST['location'];
    $IdClub = $_POST['ID'];
    $GerantsClub = $_POST['Gerants'];
    $nombreJoueurs = $_POST['nbjoueurs'];
    $date_creation = $_POST['date_creation'];
    $logo = $_FILES['logo']['name'];

    // Vérification des données saisies
    if (empty($nom_club) || empty($adresse) || empty($tel) || empty($email) || empty($date_creation) || empty($logo)) {
        echo "Tous les champs sont obligatoires.";
    } else {
        // Enregistrement des données dans une base de données ou un fichier
        // ...

        echo "Le club a été créé avec succès !";
    }
}

