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
    <!-- NavBar -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Tatasiaka</a>
            </div>
            <ul class="nav navbar-nav">
                <li ><a href="#">Acccueil</a></li>
                <li class="active"><a href="index.php?action=liste">Membre</a></li>
                <li><a href="#">Message</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><?php echo $_SESSION['pseudo'] ?></a></li>
                <li><a href="index.php?action=logout">Se deconnecter</a></li> 
            </ul>
        </div>
    </nav>


    <?php
 
?>
    <div class="container"> 
                <div class="row">
                <h1>Profil</h1>

                <?php
                    $donne = NULL;
                if (isset($_GET["pseudo"])) {

                    $pseudo = htmlspecialchars(trim($_GET["pseudo"]));
                    $donne = $mm->selectOne($pseudo);
                }
                      
                
         ?>
           

           <table>
            <tr>
                <td>Pseudo</td>
                <td><?php  echo $donne[0]->pseudo;?></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><?php  echo $donne[0]->nom;?></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><?php  echo $donne[0]->prenom;?></td>
            </tr>
            <tr>
                <td>Mail</td>
                <td><?php  echo $donne[0]-> email;?></td>
            </tr>
           </table>
    </div>


  




    <script src="publics/js/bootstrap.js">

    </script>
</body>

</html>