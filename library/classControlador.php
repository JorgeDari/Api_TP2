<?php

//	clase principal que se encarga de cargar los modelo y las vistas

	class classControlador
	{
		
		// Cargar modelo
		
		public function modelo($modelo)
		{
			require_once '../MVC_APP/models/'.$modelo.'.php';
			// Instanciamos el modelo
			return	new $modelo();
		}
		
		// Cargar vista
		
		public function vista($vista, $datos = [])
		{
			// Chequear si el archivo vista existe
			
			if (file_exists( '../MVC_APP/views/'.$vista.'.php'))
			{
				require_once '../MVC_APP/views/'.$vista.'.php';
			}
			else
			{
				die('La vista no existe');
			}
		}
	}
	