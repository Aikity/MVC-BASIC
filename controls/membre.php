<?php

class membre
{


    //Methode d' Enregistrement des menbres lors de l'inscription

    public function enregistrer($nom, $prenom, $pseudo, $email, $pass1, $pass2)
    {

        $nom = htmlspecialchars(trim($nom));
        $pseudo = htmlspecialchars(trim($pseudo));
        $email = htmlspecialchars(trim($email));
        $prenom = htmlspecialchars(trim($prenom));
        $pass1 = htmlspecialchars(trim($pass1));
        $pass2 = htmlspecialchars(trim($pass2));

        if ($nom != "" &&  $prenom != "" && $email != "" && $pass1 != "" && $pass2 != "") {
            require_once("models/membre_model.php");

            $mm = new membre_model();
            if ($mm->verifyPseudo($pseudo) == 0) {

                if ($mm->verifyEmail($email) == 0) {

                    if ($pass1 == $pass2) {
                        $pass1 = sha1($pass1);
                        $mm->Save($nom, $prenom, $pseudo, $email, $pass1);
                        $_SESSION['pseudo'] =  $pseudo;
                        header("location:index.php?action=accueil");
                        
                    } else {
                     header("location:index.php?action=register&retour=pass");

                    }
                } else {
                    header("location:index.php?action=register&retour=email ");
                }
            } else {
                header("location:index.php?action=register&retour=pseudo ");
            }
        } else {


            header("location:index.php?action=register&retour=vide");
        }
    }

    // Methode pour Se Connecter


    public function connexion($email, $pass)
    {

        $email = htmlspecialchars(trim($email));
        $pass = htmlspecialchars(trim($pass));
  

        if ($email != "" && $pass != "") {
            require_once("models/membre_model.php");
            $mm = new membre_model();
          
                if($mm->verifyEmail($email)){

                    if (sha1($pass) == $mm->selectEmail($email)[0]->pass) {
                        
                        $_SESSION['pseudo'] =  $mm->selectEmail($email)[0]->pseudo;                   

                        header("location:index.php?action=accueil");

                    }else{
                        header("location:index.php?action=login&retour=pass");
                    }

                }else{
                    header("location:index.php?action=login&retour=email");

                }
        } else {

            header("location:index.php?action=login&retour=vide");
        }
    }
}
