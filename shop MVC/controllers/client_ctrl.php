<?php
include "../models/connexion.class.php";
include "../models/client.class.php";
include "../views/client.php";

    $connexion= new Connexion();
	$cnx=$connexion->conn;

	//afficher produit
	$client= new Client($cnx);
  if(!empty($_POST['nom'])  &&    !empty($_POST['prenom']) ){
  
    $client->setNom($_POST['nom']);
	$client->setPrenom($_POST['prenom']);
	$client->setMail($_POST['mail']);
	$client->setPassword (md5($_POST['pass']));
	$client->setPhone($_POST['telephone']);
	$client->setAddresse($_POST['adresse']);
	$client->setVille($_POST['ville']);
	$client->setPays($_POST['pays']);
	$client->setCodePostal($_POST['code']);

    $client->addClient();
  }

?>