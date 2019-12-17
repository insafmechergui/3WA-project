
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
        <link href="../views/vendor/jquery/connexionclient.js" rel="stylesheet">
        
        
        <link href="../views/css/connexionclient.css" rel="stylesheet">
        <link href="../views/css/connexionclient.css" rel="stylesheet">
      
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/projet%20dev/shop/shop-homepage/controllers/connect_ctrl.php">Connexion</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="http://localhost/projet dev/shop/shop-homepage/controllers/client_ctrl.php">Inscription
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

  

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="http://localhost/projet%20dev/shop/shop-homepage/controllers/connect_ctrl.php" class="active" id="login-form-link">Connexion</a>
							</div>
							<div class="col-xs-6">
								<a href="http://localhost/projet%20dev/shop/shop-homepage/controllers/client_ctrl.php" id="register-form-link">Inscription</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="http://localhost/projet dev/shop/shop-homepage/controllers/product_ctrl.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="mail" id="mail" class="form-control" placeholder="mail" >
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="password"  class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" id="login-submit" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									
								</form>
				    		</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Footer -->
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
