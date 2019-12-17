<?php

class Connexion{
	
	private $servername;
	private $username;
	private $password;
	private $db;
	public $conn;
	
	public function __construct(){
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->db = "shop";
		$this->initConnexion();
	}
	
	public function initConnexion(){
		$servername=$this->servername;
		$username=$this->username;
		$password=$this->password;
		$db=$this->db;
		try {
		$c = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
		// set the PDO error mode to exception
		$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully"; 
		}
		catch(PDOException $e)
		{
		//echo "Connection failed: " . $e->getMessage();
		}
		
		
		$this->conn=$c;
	
	}
	
	
}
?>