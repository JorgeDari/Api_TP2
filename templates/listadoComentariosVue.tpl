{include file="header.tpl"}
{include file="Vue/lista_comentarios.tpl"}
 
        <form id="form-tarea" action="insertar" method="post">
           <input type="text" name="titulo" placeholder="Titulo">
             ...
           <input type="submit" value="Insertar">
        </form>

        <script src="js/tareas.js"></script>


{include file = 'footer.tpl'}
