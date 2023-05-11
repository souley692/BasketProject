<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=testbasket;charset=utf8','root','');
if(isset($_POST['buttom'])){
    if(!empty($_POST['logGerant']) AND !empty($_POST['mdpGerant'])){
        $logGerant = htmlspecialchars($_POST['logGerant']);
        $mdpGerant =sha1($_POST['mdpGerant']);// decripter le message

        $recupLo= $bdd->prepare('SELECT * FROM Gerant Where logGerant= ? AND mdpGerant =?');// selction les log/mdp saisie par utilisateur
        $recupLo->execute(array($logGerant, $mdpGerant));// renvoie tableau qui contient nos element
        // si on a un elmai connecter
        if($recupLo-> rowCount() >0){
            $_SESSION['logGerant']= $logGerant;
            $_SESSION['mdpGerant']= $mdpGerant;
            $_SESSION['id']= $recupLo->fetch()['id'];
            echo $_SESSION['id'];


        }else {
            echo " Votre mot de passe ou pseudo est incorect";
        }

    }else{
        echo "Veuiller completer tous les champs";
    }

}
?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Base php</title>
    <link rel="stylesheet" href="../../public/css/connexion2.css">
</head>

<body id="formulaire">
    <form action="" method="post">
        <h1 style="font-style: italic"> Bienvenue sur BASKET' <img src="../../res/ballon_ort.png" alt="ballon" width="50" height="40">RT : Gérant</h1>
       <div class="input">
        <label for="logGerant"></label>
        <input id="logGerant" type="text" name="logGerant" placeholder="Login"><br>
        <label for="mdpGerant"></label>
        <input id="mdpGerant" type="password" name="mdpGerant" placeholder="mot passe"><br>
    </div>
        <p class="inscr">Vous n'avez pas de <span>compte</span>. Veuiller retourner sur la page <span>Profil</span>.</p>        <div align="center">
            <input type="submit" value="Connexion" id="Connexion" name="buttom">
        </div>
    </form>
</body>
</html>