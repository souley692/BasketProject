<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Base php</title>
    <link rel="stylesheet" href="../../public/css/profil.css">
</head>

<body>
<?php
require_once '../config/connexion.php';
require_once '../config/appConfig.php';


$= filter_input(INPUT_POST,"nomPers2", FILTER_SANITIZE_SPECIAL_CHARS);

$prenom = filter_input(INPUT_POST,"prenomPers2", FILTER_SANITIZE_SPECIAL_CHARS);

$age = filter_input(INPUT_POST,"agePers2", FILTER_SANITIZE_NUMBER_INT);

$tabPers = createteble($nom, $prenom, $age);

//var_dump($tabPers);
$_SESSION['tabPers'][]= $tabPers;

//var_dump($_SESSION['tabPers']);

?>
<div class="formulaireTabEntier">
    <table id="tableauPers">
        <tbody>
        <tr>
            <th> NOM </th>
            <th> PRENOM </th>
            <th> AGE</th>
        </tr>

        <?php
        foreach ( $_SESSION['tabPers'] as $item) {
        ?>
        <tr>
            <td><?php echo $item['Nom']?></td>
            <td><?php echo $item['Prenom']?></td>
            <td><?php echo $item['Age']?></td>
        </tr>
        <tr>
            <?php

            }
            ?>

        </tr>
        </tbody>
    </table>
</div>
<?php

?>

</body>
</html>

