<?php
//crud tabela trans
require_once 'database.php';
require_once 'users.php';
require_once 'procedures.php';

class Tests{
	private $id;
    private $date; 
	private $criado_em;
    private $atualizado_em;
    private $users_id;
    private $procedures_id;

	
	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}
	function setId($value){
		$this->id = $value;
	}
	function setDate($value){
		$this->date = $value;
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
    function setProcedures_id($value){
        $this->procedures_id = $value;
    }
   
	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `tests`(`date`, `criado_em`, `atualizado_em`, `users_id`, `procedures_id`) VALUES (:date, :email, :password, :tipo, :remember_token, :criado_em, :atualizado_em)");
            $stmt->bindParam(":date", $this->date);
            $stmt->bindParam(":criado_em", $this->criado_em);
            $stmt->bindParam(":atualizado_em", $this->atualizado_em);
            $stmt->bindParam(":users_id", $this->users_id);
            $stmt->bindParam(":procedures_id", $this->procedures_id);

	
			
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	


	public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `tests` WHERE 1 ORDER BY `date`"); 
		$stmt->execute();
		return $stmt;
	}

  
	
}

     

?>