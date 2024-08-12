<?php
$server="localhost:3306";
$user="root";
$pass="";
$bd="cnvop";



	class Conexion extends mysqli {
		public function __construct() {
			parent::__construct('localhost:3306','root','','cnvop');
			$this->query("SET NAMES 'utf8';");
			$this->connect_errno ? die('Error con la Conexion '.mysqli_connect_error()) : $x = 'Conectado';
			unset($x);
		}
	}

	$link = mysqli_connect('localhost:3306', 'root', '', 'cnvop');

	
?>