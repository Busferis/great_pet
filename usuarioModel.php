<?php 


	/**
	 * 
	 */
	class Usuario
	{
		
		public $db;

		function __construct()
		{
			$this->db = new mysqli("localhost", "great_pet", "admin.greatpet.gecko23", "great_pet");
		}

		public function listAll(){

			$response = $this->db->query("SELECT * FROM adoptables");

			$list = array("errno" => 400, "error" => "No hay usuarios");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				$list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;
		}

		public function listByCant($parameters){
			define("CANT", 0);
			
			if(!isset($parameters[CANT])){
				return array("errno" => 400, "error" => "Falta especificar la cantidad");
			}
			
			$cant = $parameters[CANT];

			$limit = " LIMIT $cant";

			$response = $this->db->query("SELECT * FROM adoptables $limit");

			$list = array("errno" => 400, "error" => "No hay usuarios");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				//$list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;
		}

		public function listByCantPage($parameters){

			define("CANT", 0);
			define("PAGE", 1);

			if(!isset($parameters[CANT])){
				return array("errno" => 400, "error" => "Falta especificar la cantidad");
			}
			
			$cant = $parameters[CANT];

			if(!isset($parameters[PAGE])){
				return array("errno" => 400, "error" => "Falta especificar la pagina");
			}
			
			$page = ($parameters[PAGE]-1)*$cant;

			$limit = " LIMIT $page, $cant";

			$response = $this->db->query("SELECT * FROM adoptables $limit");

			$list = array("errno" => 400, "error" => "No hay usuarios");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				//$list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;
		}
	}





 ?>