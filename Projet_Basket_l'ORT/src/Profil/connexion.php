<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Base php</title>
    <link rel="stylesheet" href="Profil.css">
</head>

<body class="body-test">
<h1>Bienvenu sur basket'ort Admin</h1>
<div class="formulaireAdmin">
    <form action="traitAdmin.php" method="post">
        <label for="idAdmin">Admin</label>
        <input id="idAdmin" type="text" name="idAdmin"><br>
        <label for="mdpAdmin">mot de passe</label>
        <input id="mdpAdmin" type="text" name="mdpAdmin"><br>
        <input type="submit" value="Connexion" id="Connexion" name="buttom">
    </form>
</div>
</body>
</html>