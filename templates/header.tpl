 <!DOCTYPE html>
<html>
    <head>
        <base href="{$basehref}">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BIBLIOTECA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./templates/css/style.css">
        
    </head>
    <body>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="btn btn-outline-success inicio" href="inicio">INICIO</a></li>
                    <li class="nav-item"><a class="btn btn-outline-success categoria" href="libros">LISTADOS DE LIBROS - (Usuario no Registrado)</a></li>
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
    </body>
</html>


	  

