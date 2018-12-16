{include file="header.tpl"}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	  <div class="container my-5">
	    <h2>Formulario con FetchAPI</h2>
		   <form action="" id="formulario">

			<tr>
				<td><div class="col-md-3 col-md-offset-3 alert alert-danger" role="alert">Id Libro : {$libro->id_libro}</div> </td>
				<td><div class="col-md-5 col-md-offset-3 alert alert-danger" role="alert">Id Editorial : {$libro->id_editorial}</div> </td>
				<td><div class="col-md-150 col-md-offset-3 alert alert-danger" role="alert">Nombre : {$libro->nombre}</div> </td>
				<td><div class="col-md-10 col-md-offset-3 alert alert-danger" role="alert">Nro Paginas : {$libro->num_pagina}</div> </td> 
				<td><div class="col-md-15 col-md-offset-3 alert alert-danger" role="alert">ISBN : {$libro->ISBN}</div> </td>
				<td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Author : {$libro->autor}</div> </td>
				<td><div class="col-md-100 col-md-offset-3 alert alert-danger" role="alert">Tema : {$libro->tema}</div> </td>
				<button class="btn btn-primary" type="submit">Comentario</button>
			</tr>
			    
		   </form>

	  </div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>

    
{include file="footer.tpl"}
