 <?php

require_once 'ApiController.php';
require_once 'comentarioTaskModel.php';

class comentarioApiController extends ApiController
{

    public function __construct() {
        parent::__construct();
        $this->model = new comentarioTaskModel();
    }

    public function getComentarioByLibro($params = [])
	{
        if (empty($params)) {
         $task = $this->model->getComentarioAll();
		 $this->view->response($task, 200);
        }
        else {
            $task_id = $params[':ID'];
            $task = $this->model->getComentarioId($task_id);
            if ($task)
                $this->view->response($task, 200);
            else // si no existe la tarea
                $this->view->response("Task id=$task_id not found", 404);
        }

    }

    public function deleteComentarioByLibro($params = []) {
        $task_id = $params[':ID'];
        $task = $this->model->getComentarioId($task_id);

        if ($task) {
            $this->model->deleteComentario($task_id);
            $this->view->response("Comentario id=$task_id eliminada con éxito", 200);
        }
        else 
            $this->view->response("El Comentario id=$task_id not found", 404);
    }

    public function saveComentarioByLibro($params = []) {
        $body = $this->getData();
        $puntaje = $body->puntaje;
        $descripcion = $body->descripcion;
		$fk_libro = $body->fk_libro;
		$nombre_posteo = $body->nombre_post;
        
        //inserta la tarea y la busca
        $idTask = $this->model->saveComentario($puntaje, $descripcion);
        $tarea = $this->model->getComentarioId($idTask);

        if ($tarea)
            $this->view->response($tarea, 200);
        else
            $this->view->response("Error al guardar", 500);
    }

    
}