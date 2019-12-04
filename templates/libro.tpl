{include file="header.tpl"}

{include file="Vue/lista_comentarios.tpl"}

           <section id="los_comentarios">

				<h2>Formulario Libro</h2>
				<tr>
						<td><div class="col-md-3 col-md-offset-3 alert alert-danger" role="alert">Id Libro : {$libro->id_libro}</div> </td>
						<td><div class="col-md-5 col-md-offset-3 alert alert-danger" role="alert">Id Editorial : {$libro->id_editorial}</div> </td>
						<td><div class="col-md-150 col-md-offset-3 alert alert-danger" role="alert">Nombre : {$libro->nombre}</div> </td>
						<td><div class="col-md-10 col-md-offset-3 alert alert-danger" role="alert">Nro Paginas : {$libro->num_pagina}</div> </td> 
						<td><div class="col-md-15 col-md-offset-3 alert alert-danger" role="alert">ISBN : {$libro->ISBN}</div> </td>
						<td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Author : {$libro->autor}</div> </td>
						<td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Tema : {$libro->tema}</div> </td>
						<td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Ruta : {$libro->ruta}</div> </td>
						<!-- <td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Imagen : <img src="{$libro->ruta}" width="100" height="100"></td></div> -->
					<div>
						<button v-on:click="agregarComentario">Insertar Comentarios</button> </button>
						<!-- <button id="btnAddComentario" name="{$libro->id_libro}" class="btn btn-primary" type="">Agregar comentarios</button>	 --> -->
					</div>
						<!-- <button id="btnAddComentario" name="{$libro->id_libro}" class="btn btn-primary" type="">Agregar comentarios</button>	 -->
						<button id="btnViewComentario" name="{$libro->id_libro}" class="btn btn-primary" type="">Ver comentarios</button>
						<!-- <button id="btnDeleteComentario" name="{$libro->id_libro}" class="btn btn-primary" type="">Eliminar un Comentario</button> -->
				</tr>
		
			 </section>	
			 <div>


			 </div>
	 	 <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		 <script src="./templates/js/mainComentarios.js"></script>
{include file = 'footer.tpl'}
