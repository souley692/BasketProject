<?php

if (isset($_POST['idAdmin']) &&  isset($_POST['mdpAdmin'])) {
    foreach ($users as $user) {
        if (
            $user['idAdmin'] === $_POST['idAdmin'] &&
            $user['mdpAdmin'] === $_POST['mdpAdmin']
        ) {
            $loggedUser = [
                'idAdmin' => $user['idAdmin'],
            ];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['idAdmin'],
                $_POST['mdpAdmin']
            );
        }
    }
}
?>

    <!--
       Si utilisateur/trice est non identifié(e), on affiche le formulaire
    -->
<?php if(!isset($loggedUser)): ?>
    <form action="" method="post">
        <!-- si message d'erreur on l'affiche -->
        <?php if(isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        <div>
            <label for="Admin" class="form-label">Admin</label>
            <input type="admin" class="form-control" id="admin" name="identifiant" aria-describedby="email-help" placeholder="identifiant">
            <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <!--
        Si utilisateur/trice bien connectée on affiche un message de succès
    -->
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>