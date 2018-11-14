{include file="header.tpl"}
 
   <tbody>
    <form  method="post" action="grabarlibro">
    <action>
    	<legend>ALTA DE DATOS - LIBROS -</legend>
		<P><label>Nro de Editorial:</label></p>
       <select  name="id_Edit">
            <option value="-1">Editoriales</option>
				{foreach from=$editorial item=edit}
			<option value="{$edit->id_editorial}">{$edit->nombre}</option>
				{/foreach}
		</select>
        <p><label>Nombre:<input type="text" name="nombre"></label></P>;
        <P><label>Numero de Paginas:<input type="number" name="paginas"></label></P>;
        <P><label>ISBN:<input type="text" name="isbn"></label></P>;
        <P><label>Autor:<input type="text" name="autor"></label></P>;
        <P><label>Tema:<input type="text" name="tema"></label></P>;
        <P><input type="submit"></P>;
    </action>
    </form>
   </tbody>

{include file="footer.tpl"}