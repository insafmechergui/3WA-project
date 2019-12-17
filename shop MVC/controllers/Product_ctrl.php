<?php
include "../models/connexion.class.php";
include "../models/product.class.php";

    $connexion= new Connexion();
	$cnx=$connexion->conn;

	//afficher produit
	$product= new Product($cnx);
    $result=$product->afficheproduct();

include "../views/home.php";

?>