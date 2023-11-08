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

			$edad = $_POST["edad"];

			$sexo = $_POST["sexo"];

			$especie = $_POST["especie"];

			$localidad = $_POST["localidad"];

			

			$filtros =" where ";

			if ($edad=="all" && $sexo=="all" && $especie=="all" && $localidad=="all") {
				$filtros="";
			}




			if ($edad!="all") {

				$min = explode("/", $edad)[0];
				$max = explode("/", $edad)[1];
				$edad_filtro="`edad`>= $min AND edad <= $max";

			}

			if ($localidad!="all") {

				$localidad_filtro="`localidad`= '$localidad'";
			}

			if ($sexo!="all") {

				$sexo_filtro="`sexo`= '$sexo'";
			}

			if ($especie!="all") {

				$especie_filtro="`especie`= '$especie'";
			}



			if (isset($edad_filtro)){
				$filtros.= $edad_filtro;

				if (isset($sexo_filtro) || isset($especie_filtro) || isset($localidad_filtro)){
					$filtros.= " and ";

				}
			}

			if (isset($sexo_filtro)){
				$filtros.= $sexo_filtro;

				if (isset($especie_filtro) || isset($localidad_filtro)){
					$filtros.= " and ";

				}
			}

			if (isset($especie_filtro)){
				$filtros.= $especie_filtro;

				if (isset($localidad_filtro)){

					$filtros.= " and ";

				}
			}

			if (isset($localidad_filtro)){
				$filtros.= $localidad_filtro;

			}





			if(!isset($parameters[PAGE])){
				return array("errno" => 400, "error" => "Falta especificar la pagina");
			}
			
			$page = ($parameters[PAGE]-1)*$cant;

			$limit = " LIMIT $page, $cant";

			$response = $this->db->query("SELECT * FROM adoptables $filtros $limit");

			$list = array("errno" => 400, "error" => "No hay usuarios");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				//$list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;
		}

		public function listByCantPageBusqueda($parameters){

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

			$response = $this->db->query("SELECT * FROM mascotas WHERE estado='Perdido' $limit");

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

		public function buscar2($id_busqueda){

			$id_value3 = $id_busqueda[0];

			$response = $this->db->query("SELECT * FROM adoptables where id_adoptable='".$id_value3."'");

			$list = array("errno" => 400, "error" => "No hay mascotas");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				// $list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;
		}

		public function busquedaMascota($id_busqueda2){

			$id_value4 = $id_busqueda2[0];

			$sql = "UPDATE mascotas SET estado = 'Perdido' WHERE id_mascota ='".$id_value4."'";

			if($response = $this->db->query($sql) === TRUE){
				echo "Record updated successfully";
			} else {
			  	echo "Error updating record: " . $conn->error;
			}

			$list = array("errno" => 400, "error" => "No hay mascotas");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				// $list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;

		}

		public function busquedaMascota2($id_busqueda2){

			$id_value4 = $id_busqueda2[0];

			$sql = "UPDATE mascotas SET estado = '' WHERE id_mascota ='".$id_value4."'";

			if($response = $this->db->query($sql) === TRUE){
				echo "Record updated successfully";
			} else {
			  	echo "Error updating record: " . $conn->error;
			}

			$list = array("errno" => 400, "error" => "No hay mascotas");

			if($response->num_rows > 0 ){

				// responde con una matriz asociativa
				$list = $response->fetch_all(MYSQLI_ASSOC);

				// $list = array_merge(array("errno" => 200, "error" => "Se han listado usuarios", "num_rows" => $response->num_rows), $list);

			}

			return $list;

		}

		public function adoptar($id_adoptar){

		   $id_value4 = $id_adoptar[0];

		   $response = $this->db->query("SELECT * FROM mascotas where id_mascota='".$id_value4."'");

		   if($response->num_rows > 0 ){
		       $data = $response->fetch_all(MYSQLI_ASSOC);
		   }

		   $sql1 = "INSERT INTO adoptables (nombre, edad, sexo, especie, raza, localidad, imagen) VALUES ('".$data[0]['nombre']."', '".$data[0]['edad']."', '".$data[0]['sexo']."', '".$data[0]['especie']."', '".$data[0]['raza']."', '".$data[0]['localidad']."', '".$data[0]['imagen']."')";

		   $sql2 = "UPDATE mascotas SET estado = 'Adopcion' WHERE id_mascota = '".$id_value4."'";

		   if($this->db->query($sql1) === TRUE){
		       echo "Record inserted successfully";
		   } else {
		       echo "Error inserting record: " . $this->db->error;
		   }

		   if($this->db->query($sql2) === TRUE){
		       echo "Record updated successfully";
		   } else {
		       echo "Error updating record: " . $this->db->error;
		   }

		   $response = $this->db->query("SELECT * FROM mascotas where id_mascota='".$id_value4."'");

		   $list = array("errno" => 400, "error" => "No hay mascotas");

		   if($response->num_rows > 0 ){
		       $list = $response->fetch_all(MYSQLI_ASSOC);
		   }

		   return $list;
		}
	}





 ?>