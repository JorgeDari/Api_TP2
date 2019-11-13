{include file="header.tpl"}
 <table>
   <tbody>
		   {foreach from=$editoriales item=editorial}
			<datalist id="$editoriales">
	      	<option value="{$editorial->id_editorial}" label={$editorial->id_editorial}></option>
	     	</datalist>
		    {/foreach}
   </tbody>
 </table>
		<a href="add_editorial"><button>Agregar -- EDITORIAL -- </button></a>
{include file="footer.tpl"}