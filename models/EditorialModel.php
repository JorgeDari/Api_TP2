<?php
	
	require_once 'models/class.conexion.php';  


   class EditorialModel extends Conexion
   {
	   
	   function getEditoriales()
	   {
		 $consulta = $this->db_connection->prepare( "select * from editorial");
		 $consulta->execute();
		 return $consulta->fetchAll(PDO::FETCH_OBJ);
	   } 
	   
	   public function grabar_una_editorial($id,$nombre)
	   {
		   $consulta = $this->db_connection->prepare("INSERT INTO editorial (id_editorial,nombre) VALUES (?,?)");
			// Ejecuto la consulta
			$consulta->execute(array($id,$nombre));
	   }
	   
   }

  