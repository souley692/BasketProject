<!DOCTYPE html>
<html>
<head>
    <title>Gestion des joueurs</title>
    <link rel="stylesheet" href="J.css">
</head>
<body>

<header>
    <h1>Gestion des joueurs</h1>
</header>

<main>

    <!-- Tableau listant les joueurs -->
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Email</th>
            <th>Poste</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Dupont</td>
            <td>Jean</td>
            <td>01/01/1990</td>
            <td>jean.dupont@example.com</td>
            <td>Ailier</td>
            <td>
                <button>Modifier</button>
                <button>Supprimer</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Durand</td>
            <td>Pierre</td>
            <td>01/02/1991</td>
            <td>pierre.durand@example.com</td>
            <td>Meneur</td>
            <td>
                <button>Modifier</button>
                <button>Supprimer</button>
            </td>
        </tr>
        </tbody>
    </table>

    <!-- Formulaire d'ajout/édition de joueur -->
    <form>
        <label for="ID">ID :</label>
        <input type="number" id="ID" name="ID" required>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>

        <label for="dateNaissance">Date de naissance :</label>
        <input type="date" id="dateNaissance" name="date" required>

        <label for="club">Club :</label>
        <input type="text" id="Club" name="club" required>

        <label for="poste">Poste :</label>
        <select id="poste" name="poste" required>
            <option value="">Sélectionnez le poste du joueur</option>
            <option value="Meneur">Meneur</option>
            <option value="Arrière">Arrière</option>
            <option value="Ailier">Ailier</option>
            <option value="Ailier-fort">Ailier-f

        <input type="submit" value="Ajouter le joueur">


