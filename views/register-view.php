<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="publics/css/bootstrap.css">
    <link rel="stylesheet" href="publics/css/register.css">
    <title>Tatasiaka.com</title>
</head>

<body>

    <!-- BSform -->

    <div class="container">

        <form action="index.php?action=register-membre" method="post">

            <h1>Inscription</h1>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" id="email" name="nom">
            </div>
            <div class="form-group">
                <label">Prénom</label>
                    <input type="text" class="form-control" id="email" name="prenom">
            </div>
            <div class="form-group">
                <label">Pseudo</label>
                    <input type="text" class="form-control" id="email" name="pseudo">
            </div>
            <div class="form-group">
                <label>Votre adresse email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Votre Mot de passe:</label>
                <input type="password" class="form-control" id="pwd" name="pass1">
            </div>
            <div class="form-group">
                <label for="pwd">Confirmer votre Mot de passe:</label>
                <input type="password" class="form-control" id="pwd" name="pass2">
            </div>

            <button type="submit" class="btn btn-default" name="btnRegister">S'inscrire</button>

            <!-- affichage lors du remplissement -->

            <?php


            if (isset($_GET["retour"])) {

                if ($_GET["retour"] == "vide") {
                    echo " <div class='alert alert-danger'>
                Veuillez remplir tous les champs !
            </div>";
                }


                if ($_GET["retour"] == "pseudo") {
                    echo " <div class='alert alert-danger'>
                le pseudo est déja utilisé
            </div>";
                }

                if ($_GET["retour"] == "email") {
                    echo " <div class='alert alert-danger'>
                Cette adresse email est déja utilisée
            </div>";
                }


                
                if ($_GET["retour"] == "pass") {
                    echo " <div class='alert alert-danger'>
                les mots de passe doivent être identiques
            </div>";
                }
            }

            ?>


        </form>
    </div>



</body>

</html>