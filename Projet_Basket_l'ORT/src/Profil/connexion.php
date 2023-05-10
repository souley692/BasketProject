<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" media="screen" href="../../public/css/connexion2.css">
    <title>Base php</title>
</head>

<body id="formulaire">

<br>

    <form action="traitAdmin.php" method="post">
        <h1 style="font-style: italic">Bienvenue sur BASKET' <img src="../../res/ballon_ort.png" alt="ballon" width="50" height="40">RT : Admin</h1>
       <div class="input">
        <label for="idAdmin"></label> <br>
        <input id="idAdmin" type="text" name="idAdmin" placeholder="identifiant"><br>
        <label for="mdpAdmin"></label>
        <input id="mdpAdmin" type="password" name="mdpAdmin" placeholder="mot de passe"><br>
       </div>
        <p class="inscr" style="font-style: italic">Je n'ai pas de <span>compte</span> .Je m'en <span>crée </span>un. </p>
        <div align="center">
            <input type="submit" value="Connexion" id="Connexion" name="buttom">
        </div>


    </form>

</body>
</html>