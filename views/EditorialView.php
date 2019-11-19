<?php

  require_once "libs/Smarty.class.php";

 class EditorialView {

   private $basehref;

   public function __construct()
   {
           $this->basehref = '//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/';
   }
	 
   function add_editorial(){
	  $smarty = new Smarty();
	  $smarty->assign('basehref', $this->basehref);
	  $smarty->display('templates/altas_editorial.tpl');
   }

   function crear_una_editorial($editorial){
	$smarty = new Smarty();
	$smarty->assign('editorial',$editorial);
	$smarty->assign('basehref', $this->basehref);
	$smarty->display('templates/actualizar_editorial.tpl'); 
   }


	 function mostrarEditorial($editoriales)
    {
      // Creamos una instancia de la clase smarty
      $smarty = new Smarty();
	  $smarty->assign('editoriales',$editoriales);
	  $smarty->assign('basehref', $this->basehref);
      // Renderizamos el archivo
      $smarty->display('templates/mostrar_editorial.tpl');
    }
	 
	  public function mostrar_mensaje()
	  {
		 $smarty = new Smarty();
		 $smarty->display('templates/mostrar_mensaje.tpl');
	 }
	 
	 public function cargar_una_editorial($editorial)
	 {
		 $smarty = new Smarty();
		 $smarty->assign('editorial',$editorial);
		 $smarty->assign('basehref', $this->basehref);
		 $smarty->display('templates/mostrar_una_editorial.tpl');
	 }

	 public function editar_una_editorial($editorial){
		$smarty = new Smarty();
		$smarty->assign('editorial',$editorial);
		$smarty->assign('basehref', $this->basehref);
		$smarty->display('templates/editar_editorial.tpl');
	 }

	 public function selectEditorial($editorial)
	 {
		 $smarty = new Smarty();
		 $smarty->assign('editoriales',$editorial);
		 $smarty->display('templates/listado_editorial.tpl');
		 
	 }
	 
 }