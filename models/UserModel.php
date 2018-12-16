<?php

require_once "model.php";

class UserModel extends Model {      
    
    public function getUser($username) {
		$sentencia = $this->db_connection->prepare( "select * from usuario WHERE user='".$username."'");
        $sentencia->execute(array($username));
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

}
