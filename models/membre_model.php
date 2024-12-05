<?php

class membre_model
{

    private $bdd;
    public function __construct()
    {
        // Erreur try Catch
        // PDO PHP Data Object MySQl
        try {
            $this->bdd = new PDO("mysql:host=localhost;dbname=tatasiaka","root","");
        } catch (Exception $e) {
            echo "Erreur de Connexion au serveur! $e";
        }
    }

    // Save
    public function Save($nom, $prenom, $pseudo, $email, $pass)
    {
        $req = $this->bdd->prepare("INSERT INTO membre(nom, prenom, pseudo, email, pass)  VALUES  (?,?,?,?,?) ");

        $req->execute([$nom, $prenom, $pseudo, $email, $pass]);
    }


    //Verification

    public function verifyPseudo($pseudo)
    {
        $req =  $this->bdd->prepare("SELECT * FROM membre WHERE pseudo=?");

        $req->execute([$pseudo]);

        return $req->rowCount();
    }



    public function verifyEmail($email)
    {
        $req =  $this->bdd->prepare("SELECT * FROM membre WHERE email=?");

        $req->execute([$email]);

        return $req->rowCount();
    }

    //Suppression

    public  function deleteMembre($idMembre)
    {

        $req =  $this->bdd->prepare("DELETE * FROM membre WHERE idMembre=?");


        $req->execute([$idMembre]);
    }

    //Selection de tous les elements


    public function selectAll()
    {

        $req =  $this->bdd->query("SELECT * FROM membre");
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

    
    public function selectOne($pseudo)
    {

        $req =  $this->bdd->prepare("SELECT * FROM membre WHERE pseudo=?");
        $req->execute([$pseudo]); 
        return $req->fetchAll(PDO::FETCH_OBJ);
    }



    // Update 
    public function updateInfo($nom, $prenom, $pseudo, $email, $pass, $idMembre)
    {


        $req =  $this->bdd->prepare("UPDATE membre SET nom=?, prenom=?, pseudo=?, email=?, $pass=? WHERE idMembre=?");


        $req->execute([$nom, $prenom, $pseudo, $email, $pass, $idMembre]);
    }   
    
        //Selection Email

        public function selectEmail($email){
            
        $req =  $this->bdd->prepare("SELECT * FROM membre WHERE email=?");

        $req->execute([$email]); 

        return $req->fetchAll(PDO::FETCH_OBJ);

        }

 
}
