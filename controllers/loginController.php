<?php

#include_once 'views/loginView.php';

require_once 'controllers/controller.php';
require_once 'controllers/librosController.php';

class loginController extends Controller {

    public function __construct() {
        parent::__construct();        
    }

    public function mostrar_login() {
        $this->view->mostrar_formulario_Login();
    }

    public function verify() 
	{
        $username = $_POST['username'];
        $password = $_POST['password'];
		
        if(!empty($username) && !empty($password))
		{
			
            $user = $this->userModel->getUser($username);
            if((!empty($user)) && password_verify($password, $user['password']))
			{
				var_dump($username);
				var_dump($password);
                session_start();
                $_SESSION['USERNAME'] = $username;
                $_SESSION['ID'] = $user["id_usuario"];
                $_SESSION['LAST_ACTIVITY'] = time();
				echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
                header("Location: ".verlibros);
                die();
            }
			else
			{
				$this->view->mostrar_formulario_Login("ERROR DE CONTRASEÑA");
			}
		}
		else
		 { $This->view->mostrar_formulario_Login("ERROR DE CONTRASEÑA");}

    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: '.LOGIN);
        die(); // buena practica hacer logout
    }
}



?>