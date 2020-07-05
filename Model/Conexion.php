<?php 

class Conexion{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	private $conexion;

	public function __construct(){
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->dbname = 'tiendita';
		$this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	}

	public function executeQuery($sql){
		$container = $this->conexion->query($sql)
		return $container->fetch_all(); 
	}

	public function executeUPdate($sql){
		$this->conexion->query($sql);
	}

	public function closeConexion(){
		$this->conexion->close();
	}
}


?>