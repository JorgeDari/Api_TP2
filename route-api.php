<?php

require_once 'Routerr.php';
require_once 'api/controller/comentarioApiController.php';

$r = new Router();
// rutas de la api
$r->addRoute('comentarios','GET','comentarioApiController','getComentarios');
$r->addRoute('libros/:ID/comentarios','GET','comentarioApiController','getComentarios');
$r->addRoute('comentarios','POST','comentarioApiController','insertComentario');
$r->addRoute('comentarios/:ID','DELETE','comentarioApiController','eliminarComentario');

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
