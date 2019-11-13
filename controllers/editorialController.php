<?php

	require_once 'models/EditorialModel.php';
	require_once 'views/EditorialView.php';
//require_once 'controllers/controller.php';


   class editorialController
   {
	   
	//    private $model;
	//    private $view;
	   
	   public function __construct() {

		    $this->model = new EditorialModel();
       		$this->view = new  EditorialView(); 
	   }
	   
	   public function verEditoriales()
	   {
		  $editoriales = $this->model->getEditoriales();
		  if (!empty($editoriales))
		  {
		   $this->view->mostrarEditorial($editoriales);
	  	  }else
		  {
		 	$this->view->mostrar_mensaje();
	  	  } 
	   }

	   public function eliminar_una_editorial($id){
			if (!$this->isAdmin()) {
			header("Location:".LOGIN);
			die();
		}
	   // Me trae de la base de datos la editorial con el id_editorial=$id
	   $this->EditorialModel->eliminar_una_editorial($id);	
	   header("Location:".HOME);	
		}

	   
	   public function edit_editorial($id){
		if (!$this->isAdmin()) {
			header("Location:".LOGIN);
			die();
		}
		   $id_editorial = $_POST["id_Edit"];
		   $nombre = $_POST["nombre"];
		   $this->model->grabar_una_editorial($id_editorial,$nombre);
		   header("Location:".HOME);
		   die();
	   }
	   
	   public function cargar_una_editorial($id)
	   {
		$editorial = $this->model->traerUnaEditorial($id);   
		if (!empty($editorial)){
			$this->view->cargar_una_editorial($editorial);
		}
		 else{
			$this->view->mostrar_mensaje(); 
		 }
	   }
	   
	   public function add_editorial()
	   {
		if (!$this->isAdmin()) {
			header("Location:".LOGIN);
			die();
		}
		   $id_editorial = $_POST["id_Edit"];
		   $nombre = $_POST["nombre"];
		   $this->model->grabar_una_editorial($id_editorial,$nombre);
		   header("Location:".HOME);
	   }
	   
	}
	   
   