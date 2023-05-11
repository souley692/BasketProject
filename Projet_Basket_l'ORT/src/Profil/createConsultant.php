<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=testbasket;charset=utf8','root','');
//envoier les donner quand on clique sur le boutton
if(isset($_POST['buttom'])){
    if(!empty($_POST['nomConsu']) AND !empty($_POST['preconsu']) And !empty($_POST['dateConsu']) And !empty($_POST['logAdmin'])
        And !empty($_POST['mdpAdmin'])){
        $nomConsu= htmlspecialchars($_POST('nomConsu'));// permet au personne malveillante de rentrer de pirater
        $preconsu= htmlspecialchars($_POST('preconsu'));
        $dateConsu= htmlspecialchars($_POST('dateConsu'));
        $logAdmin= htmlspecialchars($_POST('logAdmin'));
        $mdpAdmin= sha1($_POST('mdpConsu')); // sha1 permet cripter mdp
        $insertCon = $bdd->prepare('INSERT INTO Consultant(nomConsu, preconsu, dateConsu,logAdmin,mdpConsu)values(?,?,?,?,?) ');// ? = dinnes inconnue car a entrer avec formulaire
        $insertCon ->execute(array($nomConsu, $preconsu , $dateConsu,$logAdmin,$mdpAdmin));
        $recupe =$bdd->prepare('SELECT * From Consultant WHERE nomConsu=? AND preconsu =? AND dateConsu=? And logAdmin=?
And mdpConsu=?');//permet de recupere id poiur session id
        $recupe ->execute(array($nomConsu, $preconsu , $dateConsu,$logAdmin,$mdpAdmin));
        if($recupe->rowCount() > 0) {

            //cree session
            $_SESSION['nomConsu'] = $nomConsu;
            $_SESSION['preconsu'] = $preconsu;
            $_SESSION['dateConsu'] = $dateConsu;
            $_SESSION['logAdmin'] = $logAdmin;
            $_SESSION['mdpAdmin'] = $mdpAdmin;
            $_SESSION['id'] = $recupe->fetch()['id'];// selction requete fetch recuper qu l'id

        }// si l'user existe de conter sur perieur a zero
    } else {
        echo"Veuillier completer les champs";
    }// si les champs pas vide autorisier
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
    <h1 style="font-style: italic"> Bienvenu sur BASKET' <img src="../../res/ballon_ort.png" alt="ballon" width="50" height="40">RT :creer votre compte consultant</h1>
    <div class="input">
        <label for="nomConsu"></label>
        <input id="nomConsu" type="text" name="nomConsu" placeholder="Nom" autocomplete="off"><br>
        <label for="preconsu"></label>
        <input id="preconsu" type="text" name="preconsu" placeholder="Prenom" autocomplete="off"><br>
        <label for="dateConsu"></label>
        <input id="dateConsu" type="date" name="dateConsu"placeholder="Date Naissance" autocomplete="off"><br>
        <label for="logConsu"></label>
        <input id="logConsu" type="text" name="logConsu" placeholder="Login" autocomplete="off"><br>
        <label for="mdpConsu"></label>
        <input id="mdpConsu" type="password" name="mdpConsu"placeholder="mot passe" autocomplete="off"><br>
    </div>
    <div align="center">
        <input type="submit" value="Connexion" id="Connexion" name="buttom">
    </div>
</form>
</body>
</html>
