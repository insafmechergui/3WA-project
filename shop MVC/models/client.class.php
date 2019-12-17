<?php
class Client{
   private $nom;
	private $prenom;
	private $email;
	private $password;	
	private $phone;
	private $addresse;
	private $ville;
	private $pays;
	private $codepostal;
    
	private $conn;
	
	
	
	public function __construct($c){
		$this->conn=$c;
	}
	
	public function setNom($c){
		$this->nom=$c;
	}
	public function setPrenom($c){
		$this->prenom=$c;
	}
	public function setMail($c){
		$this->email=$c;
	}
	public function setPassword($c){
		$this->password=$c;
	}
	public function setPhone($c){
		$this->phone=$c;
	}
	public function setVille($c){
		$this->ville=$c;
	}
	public function setPays($c){
		$this->pays=$c;
	}
	public function setAddresse($c){
		$this->addresse=$c;
	}
	public function setCodePostal($c){
		$this->codepostal=$c;
	}
	
	
	
	public function addClient(){
		
		$sql = "INSERT INTO client VALUES (?,?,?,?,?,?,?,?,?,?)";
		$stmt= $this->conn->prepare($sql);
		$stmt->execute(
		[0,$this->nom,$this->prenom,
		$this->email,$this->password,$this->addresse,
		$this->phone,$this->codepostal,$this->ville,$this->pays]);
	}
	

	public function Login($mail,$pass){
		$sql = $this->conn->prepare("SELECT * from client where mail='$mail' and password='$pass' ");
		$sql->execute();
		$res=$sql->fetch(PDO::FETCH_ASSOC);
		return $res;
		
	
	}
    
    
    
    
    
    
}

?>