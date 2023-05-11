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
        <h1 style="font-style: italic"> Bienvenu sur BASKET' <img src="../../res/ballon_ort.png" alt="ballon" width="50" height="40">RT : Consultant</h1>
       <div class="input">
        <label for="logConsu"></label>
        <input id="logConsu" type="text" name="logConsu"><br>
        <label for="mdpConsu"></label>
        <input id="mdpConsu" type="password" name="mdpConsu"><br>
    </div>
        <p class="inscr">Je n'ai pas de <span>compte</span>. M'en <span>créer</span> un.</p>
        <div align="center">
            <input type="submit" value="Connexion" id="Connexion" name="buttom">
        </div>
    </form>
</body>
</html>