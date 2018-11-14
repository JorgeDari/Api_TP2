<?php

//define("HOME", 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/inicio');
//define("LIBRO", 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/verlibros');
//define("EDITORIAL", 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/vereditorial');
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/verlibros');
define('ADMIN', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/inicio');

require_once 'views/loginView.php';
require_once "libs/Smarty.class.php";
require_once 'models/UserModel.php';
require_once 'models/librosModel.php';

class controller {
        protected $view;
        protected $model;
        
        public function __construct(){
			$this->view = new LoginView();
			$this->librosView = new librosView;
        	$this->userModel = new UserModel();
			$this->librosModel = new librosModel();
        }
	
	function mostrar_Login(){
		
	}
	
    }
?>