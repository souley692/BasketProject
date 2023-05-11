<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=testbasket;charset=utf8','root','');
if(isset($_POST['buttom'])){
if(!empty($_POST['logConsu']) AND !empty($_POST['mdpConsu'])){
$logConsu = htmlspecialchars($_POST['logConsu']);
$mdpConsu =sha1($_POST['mdpConsu']);// decripter le message

$recupLo= $bdd->prepare('SELECT * FROM Consultant Where logConsu= ? AND mdpConsu =?');// selction les log/mdp saisie par utilisateur
$recupLo->execute(array($logConsu, $mdpConsu));// renvoie tableau qui contient nos element
// si on a un elmai connecter
if($recupLo-> rowCount() >0){
$_SESSION['logConsu']= $logConsu;
$_SESSION['mdpConsu']= $mdpConsu;
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
        <h1 style="font-style: italic"> Bienvenue sur BASKET' <img src="../../res/ballon_ort.png" alt="ballon" width="50" height="40">RT : Consultant</h1>
       <div class="input">
        <label for="logConsu"></label>
        <input id="logConsu" type="text" name="logConsu" placeholder="Login"><br>
           <label for="mdpConsu"></label>
        <input id="mdpConsu" type="password" name="mdpConsu" placeholder="mot passe"><br>
    </div>
        <p class="inscr">Je n'ai pas de <span>compte</span>. M'en <span>créer</span> un.</p>
        <div align="center">
            <input type="submit" value="Connexion" id="Connexion" name="buttom">
        </div>
    </form>
</body>
</html>