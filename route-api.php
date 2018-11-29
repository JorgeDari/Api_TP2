<?php

require_once 'api/Router.php';
require_once 'api/ComentariosApiController.php';


$r = new Router();

// rutas de la api
$r->addRoute("libros/:ID/comentarios","GET", "ComentariosApiController", "getComentariosByLibro");

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
