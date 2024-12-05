<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="publics/css/bootstrap.css">
    <link rel="stylesheet" href="publics/css/connexion.css">
    <title>Tatasiaka.com</title>
</head>

<body>

    <!-- BSform -->

    <div class="container">

        <form action="index.php?action=login-membre" method="post">

            <h1> Connexion</h1>
            <div class="form-group">
                <label>Votre adresse email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label>Votre Mot de passe:</label>
                <input type="password" class="form-control" id="pwd" name="pass">
            </div>

            <button type="submit" class="btn btn-default" name="btnSeconnecter">Se connnecter</button>


        </form>
    </div>


    <?php



    if (isset($_GET["retour"])) {

        if ($_GET["retour"] == "vide") {
            echo " <div class='alert t alert-warning'>
    Veuillez remplir tous les champs !
</div>";
        }


        if ($_GET["retour"] == "email") {
            echo " <div class='alert alert-warning'>
        email inexistant</div>";
        }



        if ($_GET["retour"] == "pass") {
            echo " <div class='alert alert-warning'>
            Mot de passe imcompatible
</div>";
        }
    }


    ?>




</body>

</html>