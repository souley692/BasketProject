<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Création du Club de Basket</title>
    <link rel="stylesheet" href="Club.css">
</head>
<body>

<header>
    <h1>Création du Club de Basket</h1>
</header>

<main>
    <formt method="POST" action="traitCreationClub.php>
        <label for="nomClub">Nom du club :</label>
        <input type="text" id="nomClub" name="nomClub" required>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" required>

        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required>

        <label for="codePostal">Code postal :</label>
        <input type="text" id="codePostal" name="codePostal" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" required>

        <label for="couleurs">Couleurs :</label>
        <select id="couleurs" name="couleurs" required>
            <option value="">Sélectionnez les couleurs de l'équipe</option>
            <option value="bleu et blanc">Bleu et blanc</option>
            <option value="rouge et noir">Rouge et noir</option>
            <option value="vert et blanc">Vert et blanc</option>
            <option value="jaune et noir">Jaune et noir</option>
        </select>

        <label for="logo">Logo :</label>
        <input type="file" id="logo" name="logo" accept="image/*" required>

        <input type="submit" value="Créer le club">
    </form>
</main>

</body>
</html>
