
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
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/projet dev/shop/shop-homepage/controllers/product_ctrl.php">Home
                                <span class="sr-only">(current)</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/projet%20dev/shop/shop-homepage/controllers/connect_ctrl.php">Connexion</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="http://localhost/projet dev/shop/shop-homepage/controllers/client_ctrl.php">Inscription</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <h1 class="my-4">Shop</h1>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Pantalons</a>
                        <a href="#" class="list-group-item">T-shirt</a>
                        <a href="#" class="list-group-item">Chaussures</a>
                    </div>

                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <?php foreach($result as $value){ ?>

                                <div class="carousel-item active">

                                    <img class="d-block img-fluid" src="http://localhost/projet dev/shop/shop-homepage/products_images/<?= $value->image ?>" alt="slider">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="row">
                        <?php foreach($result as $value){ ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-20">
                                    <a href="#"><img class="card-img-top" src="http://localhost/projet dev/shop/shop-homepage/products_images/<?= $value->image; ?>" alt="product"/></a>
                                    <div class="card-body">


                                            <h4 class="card-title">
                                                <a href="#"><?= $value->title; ?></a>
                                            </h4>

                                            <h5>Price: <?= $value->price; ?>TND</h5>

                                    </div>
                                </div>
                            </div>

                        <?php } ?>


                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

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
