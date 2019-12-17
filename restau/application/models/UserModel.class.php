<?php

class UserModel
{
    public function inscription($tab){
    $conn = new Database();
    $sql = 'INSERT INTO user(nom, prenom, adresse, ville, code_postal, phone, email, password) VALUES (?,?,?,?,?,?,?,?)';
    
    $passwordHash = md5 ($tab['pass']);
        $conn->executeSql($sql, [$tab['nom'], $tab['prenom'], $tab['address'], $tab['city'], $tab['Code'], $tab['phone'], $tab['mail'], $passwordHash]);

		echo '<h1>inscription terminée</h1>';
        
    }
    
    public function login(){
        
        $conn = new Database();
        
        $passwordHash = md5($_POST['pass']);

        $sql= 'SELECT * FROM user WHERE email = ? AND password = ?';
        $conn->executeSql($sql,[$_POST['mail'], $passwordHash]);
        
    }
    
     
    
    
    
}