<?php
	require_once "models/model.php";
 

   class EditorialModel extends model
   {
	   
	  function alta_editorial(){
		$this->add_editorial();

	  }

	   function getEditoriales()
	   {
		 $consulta = $this->db_connection->prepare( "select * from editorial");
		 $consulta->execute();
		 return $consulta->fetchAll(PDO::FETCH_OBJ);
	   } 
	   
	   function traerUnaEditorial($id)
	   {
		   $laEditorial = $this->db_connection->prepare("select * FROM editorial WHERE editorial.id_editorial=?");
		   $laEditorial->execute(array($id));
		   return $laEditorial->fetch(PDO::FETCH_OBJ);
	   }

	   function one_get_editorial($id)
	   {
		   $laEditorial = $this->db_connection->prepare("select * FROM editorial WHERE editorial.id_editorial=?");
		   $laEditorial->execute(array($id));
		   return $laEditorial->fetch(PDO::FETCH_OBJ);
	   }
	   
	   public function grabar_editorial_actualizada($id,$nombre){
    	   $con = $this->db_connection->prepare("UPDATE editorial SET nombre=? WHERE id_editorial=?"); 
	    	$con->execute([$id,$nombre]);	   
		}
	   
	   public function grabar_una_editorial($id,$nombre)
	   {
		   $consulta = $this->db_connection->prepare("INSERT INTO editorial (id_editorial,nombre) VALUES (?,?)");
			// Ejecuto la consulta
			$consulta->execute(array($id,$nombre));
		
	   }

	   function eliminar_una_editorial($id)
		{	   
			// Elimino uuna Editorial
			$consulta = $this->db_connection->prepare("DELETE FROM editorial WHERE id_editorial=?");
			$consulta->execute(array($id));
			
		}
	   

   }

  