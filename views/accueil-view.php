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
                <li class="active"><a href="#">Acccueil</a></li>
                <li><a href="index.php?action=liste">Membre</a></li>
                <li><a href="#">Message</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href=""><?php echo $_SESSION['pseudo'] ?></a></li>
                <li><a href="index.php?action=logout">Se deconnecter</a></li> 
            </ul>
        </div>
    </nav>

    <div class="container">

        <form action="index.php?action=login-membre" method="post">

            <h1>Publication</h1>
            <div class="form-group">
              <textarea class="form-control"></textarea>
            </div>

    
            <button type="submit" class="btn btn-warning">Publier</button>

        </form>

        </div>





    <script src="publics/js/bootstrap.js">

    </script>
</body>

</html>