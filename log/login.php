<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../log/log.css">

</head>

<body>
    <div class="container">
        <h1>Connexion</h1>
        <form action="" method="post">
            <div class="champ">
                <input type="text" name="identifiant" placeholder="Identifiant" autocomplete="off">
                <input type="password" name="mdp" placeholder="Mot de Passe" autocomplete="off">
                <input type="submit" name="connecter" value="Se connecter">
                <input type="submit" name="inscrire" value="S'inscrire">
            </div>
            <?php
            if(isset($_POST['connecter'])) {
                echo "Connecter avec succès !";
            } elseif(isset($_POST['inscrire'])) {
                header("Location: register.php");
            }
            ?>
        </form>
    </div>
</body>

</html>