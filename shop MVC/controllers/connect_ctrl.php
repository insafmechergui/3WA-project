<?php
include "../models/connexion.class.php";
include "../models/client.class.php";
include "../views/connect.php";
if(!empty($_POST['mail'])  &&    !empty($_POST['pass']) ){

    $connexion= new Connexion();
	$cnx=$connexion->conn;

	$client= new Client($cnx);
    $client->Login($_POST['mail'],(md5($_POST['pass'])));
 
}
?>