<?php

require_once "model.php";

class UserModel extends Model {      
    
<<<<<<< HEAD
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '1234');	
    }

=======
>>>>>>> e610c30f7ed895450e0f22b4e40182031c4a72bc
    public function getUser($username) {
		$sentencia = $this->db_connection->prepare( "select * from usuario WHERE user='".$username."'");
        $sentencia->execute(array($username));
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

}
