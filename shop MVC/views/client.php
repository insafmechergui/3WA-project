
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop Homepage - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="../views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../views/css/shop-homepage.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="http://localhost/projet dev/shop/shop-homepage/controllers/product_ctrl.php">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/projet%20dev/shop/shop-homepage/controllers/connect_ctrl.php">Connexion</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/projet dev/shop/shop-homepage/controllers/client_ctrl.php">Inscription
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">
                    <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Inscription client</h4>
                            </div>
                            <div class="content">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control" placeholder="nom" name="nom">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input type="text" class="form-control" placeholder="prenom" name="prenom" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Téléphone</label>
                                                <input type="text" class="form-control" placeholder="telephone" name="telephone">
     
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Addresse</label>
                                                <input type="text" class="form-control" placeholder="adresse" name="adresse">
     
                                            </div>
                                        </div>
                                         
                                    </div>

                                    <div class="row">
                                             
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Code Postal</label>
                                                <input type="text" class="form-control" placeholder="code postal" name="code">
                                            </div>
                                        </div>
                                           
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Ville</label>
                                                <input type="text" class="form-control" placeholder="ville" name="ville">
                                            </div>
                                        </div> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Pays</label>
                                                <input type="text" class="form-control" placeholder="pays" name="pays">
                                            </div>
                                        </div>                               
                                        
                                    </div>
                                    
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mail</label>
                                                <input type="email" class="form-control" placeholder="mail" name="mail">
     
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" class="form-control" placeholder="mot de pass" name="pass">
                                            </div>
                                        </div>
                                    </div>
                                  

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Enregistrer</button>
                                </form>
                            </div>
                        </div>
            </div>
        </div>


        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
            </div>
        <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="../views/vendor/jquery/jquery.min.js"></script>
        <script src="../views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
