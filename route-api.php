<?php

require_once 'Router.php';
require_once 'api/controller/comentarioApiController.php';

$r = new Router();
// rutas de la api
$r->addRoute('comentario','GET','legajoCatastroApiController','getComentarios');
$r->addRoute('comentario/:ID','GET','legajoCatastroApiController','getComentarios');
$r->addRoute('comentario','POST','legajoCatastroApiController','insertComentario');

//run
$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
