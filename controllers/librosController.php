<?php


require_once 'models/EditorialModel.php';
require_once 'views/EditorialView.php';
require_once 'controllers/controller.php';




//class librosController extends controller{
class librosController extends controller
{
#private $model;
#private $view;#
private $modelEdit;
private $viewEdit;

public function __construct() 
{
	   parent::__construct();
	   $this->modelEdit = new EditorialModel;
	   $this->viewEdit = new EditorialView;
}

   function mostrarLibros()
   {
      $libros = $this->librosModel->getlibros(); // trae de la base de datos todos los libros
	   if (!empty($libros)){
		   $this->librosView->mostrarLibros($libros);
	  }else{
		 $this->librosView->mostrar_mensaje();
	  }
   }

	function mostrar_un_Libro($id)
   {
      $un_libro = $this->librosModel->get_un_libro($id); // trae de la base de datos un libro
	  if (!empty($un_libro))
	  {
		   $this->librosView->mostrar_un_Libro($un_libro);
	  }else{
		 $this->librosView->mostrar_Error();
	  }    
	  	header("Location:".HOME);
   }
	
	function eliminar_un_libro($id)
	{
	   // Me trae de la base de datos el libro con el id_libro=$id
	   $this->librosModel->eliminar_un_libro($id);	
	   header("Location: http://localhost/MVC_APP/");	
	}
	
	function cargar_un_libro()
	{
		$editoriales = $this->modelEdit->getEditoriales(); // Me traigo las editoriales de la B. Datos
		$this->librosView->cargar_un_libro($editoriales);
	}

	function agregar_un_libro()
	{
		$id_editorial=$_POST["id_Edit"];
		$nombre=$_POST["nombre"];
		$paginas=$_POST["paginas"];		
		$isbn=$_POST["isbn"];
		$autor=$_POST["autor"];
		$tema=$_POST["tema"];
		$this->librosModel->grabar_un_libro($id_editorial,$nombre,$paginas,$isbn,$autor,$tema);
		header("Location:".HOME);
	}

	function crear_libro($id)
	{
		$libro = $this->librosModel->get_un_libro($id);
		if (!empty($libro))
		  {
				$editoriales = $this->modelEdit->getEditoriales(); // Me traigo las editoriales de la Base de Datos
				$this->librosView->crear_el_libro($libro,$editoriales);
		  }
		else{
			 $this->librosView->mostrar_Error();
			 header("Location:".HOME);
			}
	}	
	
	function editar_un_libro($id)
	{
		$id_libro=$_POST["id_libro"];
		$id_editorial=$_POST["id_editorial"];
		$nombre=$_POST["nombre"];
		$paginas=$_POST["paginas"];		
		$isbn=$_POST["isbn"];
		$autor=$_POST["autor"];
		$tema=$_POST["tema"];
		$this->librosModel->editarLibro($id_libro,$id_editorial,$nombre,$paginas,$isbn,$autor,$tema);
		header("Location: "."verlibros");
		die();
	}
}
  

