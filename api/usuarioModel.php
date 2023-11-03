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

		public function listAll($id){

			$id_value = $id[0];

			$response = $this->db->query("SELECT * FROM mascotas where id_usuario='".$id_value."'");

			$list = array("errno" => 400, "error" => "No hay mascotas");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				// $list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

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


		public function listar_mascota_qr($parameters){

			$id_usuario = $parameters[0];

			$response = $this->db->query("SELECT * FROM mascotas WHERE id_usuario=$id_usuario");

			$list = array("errno" => 400, "error" => "No hay mascota");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				$list = array(array("errno" => 200, "error" => "Se han listado mascota", "num_rows" => $response->num_rows), $list);

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

		public function eliminarMascota($id_mascota){

			$id_valor = $id_mascota[0];

			try {
		        $response = $this->db->query("DELETE FROM mascotas where id_mascota='".$id_valor."'");
		        
		        if ($response === false) {
		            throw new Exception("Error deleting the pet");
		        }

		        if ($this->db->affected_rows > 0) {
		            $list = array("errno" => 200, "message" => "La mascota ha sido eliminada exitosamente");
		        } else {
		            $list = array("errno" => 400, "error" => "No se encontró la mascota a eliminar");
		        }
		    } catch (Exception $e) {
		        $list = array("errno" => 400, "error" => $e->getMessage());
		    }

			return $list;

		}

		public function buscar($id_busqueda){

			$id_value3 = $id_busqueda[0];

			$response = $this->db->query("SELECT * FROM mascotas where id_mascota='".$id_value3."'");

			$list = array("errno" => 400, "error" => "No hay mascotas");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				// $list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;
		}
	}





 ?>