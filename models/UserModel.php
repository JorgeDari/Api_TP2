<?php

class UserModel {

    private $db_connection;
    
    function __construct()
    {
        $this->db_connection = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');	
    }

    public function getUser($username) {
		$sentencia = $this->db_connection->prepare( "select * from usuario WHERE user='".$username."'");
        $sentencia->execute(array($username));
        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

}
