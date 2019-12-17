<?php
class Product{
    private $titre;
	private $type;
	private $size;
	private $color;	
	private $price;
	private $description;
	private $image;
	private $name;
    
    private $conn;
        
    public function __construct($c){
		$this->conn=$c;
	}
    
    public function afficheproduct(){
        $data = $this->conn->query('SELECT * FROM products')->fetchAll(PDO::FETCH_CLASS);
            return $data;
        
    }
   
    
    public function setTitre($c){
		$this->titre=$c;
	}
	public function setType($c){
		$this->type=$c;
	}
	public function setSize($c){
		$this->size=$c;
	}
	public function setColor($c){
		$this->color=$c;
	}
	public function setPrice($c){
		$this->price=$c;
	}
	public function setDescription($c){
		$this->description=$c;
	}
	public function setImage($c){
		$this->image=$c;
	}
	
		//insertion d'un produit

	
	public function insertproduct($t){
        if (!isset($t['image'])){
			$picture =NULL ;
		}else{
			$picture=$_POST['image'];

		}
        
        
            $sql = $this->conn->prepare ("INSERT INTO products VALUES (?,?,?,?,?,?,?)");

            $sql->execute([0,$t['title'],$t['color'],$t['price'],$t['description'],$t['type'],$t['image']]);
    
    
    }
    
    
    
    
    
    
    
}

?>