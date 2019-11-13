{include file="header.tpl"}
 <table>
   <tbody>
       {foreach from=$editoriales item=editorial}
       <tr>
         <td>{$editorial->id_editorial} </td>   
         <td>{$editorial->nombre}</td>
         <td><a href="ver_una_editorial/{$editorial->id_editorial}"><button>Ver</button></a></td>
         <td><a href="edit_editorial/{$editorial->id_editorial}"><button>Editar</button></a></td>
         <td><a href="eliminar_editorial/{$editorial->id_editorial}"><button>Eliminar</button></a></td>
       </tr>
     {/foreach}
     
   </tbody>
 </table>
 <a href="add_editorial"><button>Agregar una Editorial </button></a>

{include file="footer.tpl"}