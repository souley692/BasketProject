<?php
?>
<!DOCTYPE html>
<html>
<title>La Creation du Club</title>
<head>
    <h1>Bienvenu au page de la creation du club</h1>
</head>
<body>
<form method="POST" action="traitCreationClub.php">
    <label for="nom_club">Nom du club :</label>
    <input type="text" id="nom_club" name="nom_club" required>

    <label for="location">Location :</label>
    <input type="text" id="location" name="location" required>

    <label for="IdClub">ID:</label>
    <input type="number" id="IdClub" name="ID" required>

    <label for="Gerants">Gerants :</label>
    <input type="text" id="Gerants" name="Gerants" required>

    <label for="nbjoueurs">Nombre de joueurs:</label>
    <input type ="number" id ="nbjoueurs" name = "nbjoueurs" required>e

    <label for="date_creation">Date de création :</label>
    <input type="date" id="date_creation" name="date_creation" required>

    <label for="logo">Logo :</label>
    <input type="file" id="logo" name="logo" required>

    <input type="submit" value="Créer le club">
</form>

</body>

</html>