<?php
include "../../models/connexion.class.php";
include "../../models/product.class.php";

    $connexion= new Connexion();
	$cnx=$connexion->conn;


	//ajouter produit

if(!empty($_POST['title']) && !empty($_POST['price'])){
/*
$produit->setTitre($_POST['title']);
$produit->setType($_POST['type']);
//$produit->setSize($_POST['size']);
$produit->setColor($_POST['color']);
$produit->setPrice($_POST['price']);
$produit->setDescription($_POST['description']);
$produit->setImage($_POST['image']);

*/
    
    $tab=array('title'=>$_POST['title'],
	'type'=>$_POST['type'],
	'color'=>$_POST['color'],
	//'size'=>$_POST['size'],
	'price'=>$_POST['price'],
	'description'=>$_POST['description'],
    'image'=>$_POST["image"]
              );
 
if(!empty($_FILES["image"]["name"])){
     $sourcePath = $_FILES['image']['tmp_name'];       // Storing source path of the file in a variable
     //shell_exec("mkdir ./img");
     $targetPath = "../../products_images/".$_FILES['image']['name']; // Target path where file is to be stored
     //move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
     $i=$_FILES["image"]["name"];

     if (move_uploaded_file($sourcePath, $targetPath)) {
       echo json_encode("The file ". basename( $_FILES["image"]["name"]). " has been uploaded.");



     } else {
       echo json_encode("Sorry, there was an error uploading your file.");
     }
}

	$produit = new Product($cnx);
    $produit->insertproduct($tab);
}
include "../../views/admin/user.php";


?>