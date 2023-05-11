
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Creation des joueurs</title>
    <link rel="stylesheet" href="Joueur.css">
</head>
<body>

<header>
    <h1>Creation des joueurs</h1>
</header>

<main>
    <form>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="dateNaissance">Date de naissance :</label>
        <input type="date" id="dateNaissance" name="dateNaissance" required>

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

        <label for="poste">Poste :</label>
        <select id="poste" name="poste" required>
            <option value="">Sélectionnez le poste du joueur</option>
            <option value="Meneur">Meneur</option>
            <option value="Arrière">Arrière</option>
            <option value="Ailier">Ailier</option>
            <option value="Ailier-fort">Ailier-f
                <input type="submit" value="Créer le joueur">
