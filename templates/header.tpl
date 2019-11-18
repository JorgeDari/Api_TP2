 <!DOCTYPE html>
<html>
    <head>
        <base href="{$basehref}">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BIBLIOTECA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="http://localhost/Api_TP2_r/templates/css/style.css">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="btn btn-outline-success inicio" href="inicio">INICIO</a></li>
                    <li class="nav-item"><a class="btn btn-outline-success categoria" href="libros">LISTADOS DE LIBROS</a></li>
                    <li class="nav-item"><a class="btn btn-outline-success producto" href="ver_editoriales">LISTADO DE EDITORIALES</a></li>
                    <li class="nav-item">
                       {if !empty($nombreUsuario)}
                            <a class="btn btn-outline-warning logearse" href="logout">Cerrar sesion ({$nombreUsuario})</a>    
                        {else} 
                            <a class="btn btn-outline-success logearse" href="login">Logearse</a>
                        {/if}
                    </li>
                            
                </ul>
            </div>

        </nav>
       
    </body>
</html>


	  

