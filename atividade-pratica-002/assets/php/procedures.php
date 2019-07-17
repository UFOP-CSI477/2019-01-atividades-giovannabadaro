<?php
//crud tabela trans
require_once 'database.php';
require_once 'users.php';


class Procedures{
	private $id;
    private $name;
    private $price;
	private $criado_em;
    private $atualizado_em;
    private $users_id;
	
	
	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}
	function setId($value){
		$this->id = $value;
	}
	function setName($value){
		$this->name = $value;
    }
    function setPrice($value){
        $this->price = $value;
    }
    function setCriado_em($value){
        $this->criado_em = $value;
    }
    
    function setAtualizado_em($value){
        $this->atualizado_em = $value;
    }
    function setUsers_id($value){
        $this->users_id = $value;
    }
   
	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `procedures`(`name`, `price`,`criado_em`, `atualizado_em`, `users_id`) VALUES (:name, :price,:CURRENT_TIMESTAMP, :CURRENT_TIMESTAMP, :users_id)");
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":price", $this->price);            
            $stmt->bindParam(":CURRENT_TIMESTAMP", $this->criado_em);
            $stmt->bindParam(":CURRENT_TIMESTAMP", $this->atualizado_em);
            $stmt->bindParam(":users_id", $this->users_id);
	
			
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	


	public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `procedures` WHERE 1 ORDER BY `name`"); 
		$stmt->execute();
		return $stmt;
	}

  
	
}

     

?>