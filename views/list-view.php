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

            <?php
            $data = $mm->selectAll();

            for ($i=0; $i < count($data) ; $i++) { 
                
             echo  " <div class='col-lg-2' >
    <img src='publics/image/avatar.png' class='img img-responsive'>
    <h3>".$data[$i]->pseudo."</h3><a href='index.php?action=profil&pseudo=".$data[$i]->pseudo."'>Voir profil</a>
</div> ";
            } ?>

           
    </div>


  




    <script src="publics/js/bootstrap.js">

    </script>
</body>

</html>