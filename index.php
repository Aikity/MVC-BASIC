<?php

// Utilisation de session_start();
session_start();

if (isset($_GET["action"])) {


    //Voir formulaire de connexion
    if ($_GET["action"] == "login") {

        include("views/login-view.php");
    } // Voir formulaire d'incscription
    elseif ($_GET["action"] == "register") {


        include("views/register-view.php");
    }  // Click bouttons pour enregistrer le membre
    elseif ($_GET["action"] == "register-membre") {



        if (isset($_POST["btnRegister"])) {

            require_once("controls/membre.php");
            $m = new membre();
            $m->enregistrer($_POST["nom"], $_POST["prenom"], $_POST["pseudo"], $_POST["email"], $_POST["pass1"], $_POST["pass2"]);
        }
    } // Voir l'accueil
    elseif ($_GET["action"] == "accueil") {

        if (isset($_SESSION['pseudo'])) {
            include("views/accueil-view.php");
        } else {

            header("location:index.php");
        }
    } // deconnexion

    elseif ($_GET["action"] == "logout") {
        #Destruction of session and don't be return to interface
        session_destroy();
        header("location:index.php");
    } // Connexion
    elseif ($_GET["action"] == "login-membre") {


        if (isset($_POST["btnSeconnecter"])) {

            require_once("controls/membre.php");
            $mm = new membre();
            $mm->connexion($_POST["email"], $_POST["pass"]);
            
        }
    }elseif ($_GET["action"] == "liste") {
        require_once("models/membre_model.php");
        $mm = new membre_model();
        include("views/list-view.php");
      
    }

    elseif ($_GET["action"] == "profil") {
        require_once("models/membre_model.php");
        $mm = new membre_model();
        include("views/profil-view.php");
      
    }





} else {

    include("views/home-view.php");
}
