<?php

require_once 'ApiController.php';
require_once 'models/comentarioTaskModel.php';

class ComentariosApiController extends ApiController 
{
	
	
    public function __construct() 
	{
        parent::__construct();
        $this->model = new comentarioTaskModel();
    }
	
	public function getComentariosByLibro($params = [])
	{
		
		if (empty($params)) {
         $task = $this->model->getComentario();
         $this->view->response($task, 200);
        }
        else {
            $task_id = $params[':ID'];
            $task = $this->model->getComentario($task_id); 
             if ($task)
                $this->view->response($task, 200);
            else // si no existe la tarea
                $this->view->response("Task id=$task_id not found", 404);
        }
	}
		
		public function deleteComentariosByLibro($params = []) 
		{
        $task_id = $params[':ID'];
        $task = $this->model->getComentario($task_id);

        if ($task) {
            $this->model->deleteComentario($task_id);
            $this->view->response("Comentario id=$task_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("Coment id=$task_id not found", 404);
    	}
		
		public function saveComentariosByLibro($params = [])
		{
        $body = $this->getData();
        $descripcion = $body->descripcion;
        $puntaje = $body->puntaje;
        
        //inserta la tarea y la busca
        $idTask = $this->model->saveComentario($descripcion, $puntaje);
        $tarea = $this->model->getComentario($idTask);

        if ($tarea)
            $this->view->response($tarea, 200);
        else
            $this->view->response("Error al guardar", 500);
    	}

}
	
	
