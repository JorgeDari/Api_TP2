<<<<<<< HEAD
 <!DOCTYPE html>
<html>
    <head>
        <base href="{$basehref}">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BIBLIOTECA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap-4.1.3/bootstrap.min.css">       
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-success inicio" href="inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-success categoria" href="Libros">verlibros</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-success producto" href="Editorial">verEditorial</a>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-item">
                        {if !empty($nombreUsuario)}
                            <a class="btn btn-outline-warning logearse" href="logout">Cerrar sesion ({$nombreUsuario})</a>    
                        {else} 
                            <a class="btn btn-outline-success logearse" href="login">Logearse</a>
                        {/if}
                    </li>
<
                </ul>
<
            </div>
<
        </nav>
<
        <div class="container-fluid p-0">
            <div class="row m-0 mt-5 pt-5">
    </body>
</html>


	  
=======
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>LIBROS</title>
 	</head>
	<body>
		<div class="container" style="width:90%">
 		    <h1  class="container well">Base de Datos - Biblioteca</h1>
>>>>>>> e610c30f7ed895450e0f22b4e40182031c4a72bc
