<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Base php</title>
    <link rel="stylesheet" href="../../public/css/connexion2.css">
</head>

<body id="formulaire">
<form action="traitAdmin.php" method="post">
    <h1 style="font-style: italic"> Bienvenue sur BASKET' <img src="../../res/ballon_ort.png" alt="ballon" width="50" height="40">RT : Joueur</h1>
    <div class="input">
        <label for="logAdmin"></label>
        <input id="logAdmin" type="text" name="logAdmin"><br>
        <label for="mdpAdmin"></label>
        <input id="mdpAdmin" type="password" name="mdpAdmin"><br>
    </div>
    <p class="inscr">Je n'ai pas de <span>compte</span>. Je demande à l'administration de m'en <span>créer</span> un.</p>
    <div align="center">
        <input type="submit" value="Connexion" id="Connexion" name="buttom">
    </div>
</form>
</body>
</html>
