<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Adhérent - Club de sport</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="images/logo.png" alt="Logo du Club de sport">
    </div>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Equipes</a></li>
            <li><a href="#">Joueurs</a></li>
            <li><a href="#">Matchs</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="registration-form">
        <h1>Inscription Adhérent</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="nom">Nom complet :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmez le mot de passe :</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
            <div class="form-group">
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" required>
            </div>
            <div class="form-group">
                <label for="pays">Pays :</label>
                <input type="text" id="pays" name="pays" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2023 Club de sport. Tous droits réservés.</p>
</footer>
</body>
</html>
