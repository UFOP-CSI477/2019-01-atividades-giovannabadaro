<?php
//crud tabela trans
require_once 'database.php';

class Users{
	private $id;
    private $name;
    private $email;
	private $password;
	private $tipo;
	private $remember_token;
	private $criado_em;
    private $atualizado_em;

	
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
    function setEmail($value){
        $this->email = $value;
    }
    function setPassword($value){
        $this->password = $value;
    }
	function setTipo($value){
		$this->tipo= $value;
	}
	function setRemember_token($value){
        $this->remember_token = $value;
    }
    function setCriado_em($value){
        $this->criado_em = $value;
    }
    function setAtualizado_em($value){
        $this->atualizado_em = $value;
    }
   
	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `users`(`name`, `email`,`password`, `tipo`, `remember_token`, `criado_em`, `atualizado_em`) VALUES (:name, :email, :password, :tipo, :remember_token, :criado_em, :atualizado_em)");
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
			$stmt->bindParam(":tipo", $this->tipo);
			$stmt->bindParam(":remember_token", $this->remember_token);			
            $stmt->bindParam(":criado_em", $this->criado_em);
            $stmt->bindParam(":atualizado_em", $this->atualizado_em);
	
			
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	


	public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `users` WHERE 1 ORDER BY `name`"); 
		$stmt->execute();
		return $stmt;
	}
	public function locate(){
        $stmt = $this->conn->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
    }

  
	
}

     

?>