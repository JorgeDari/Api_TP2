{include file="header.tpl"}
 <table>
   <tbody>
       <tr>
         <td>{$libro->id_libro}</td>
         <td> </td>
         <td>{$libro->id_editorial}</td>
          <td> </td>
         <td>{$libro->nombre}</td>
          <td> </td>
         <td>{$libro->num_pagina}</td>
          <td> </td>
         <td>{$libro->ISBN}</td>
          <td> </td>
         <td>{$libro->autor}</td>
          <td> </td>
         <td>{$libro->tema}</td>
       </tr>
   </tbody>
 </table>
{include file="footer.tpl"}
