{literal}
    <section id="los_comentarios">
        <h3> {{ subtitle }} </h3>
    
        <ul>
           <li v-for="comentario of comentarios ">
            {{comentario.id}} {{ comentario.descripcion }} - {{comentario.puntaje}} 
                    <button v-on:click="deleteComent(comentario.id)">Borrar Comentario</button>
           </li> 
        </ul>
    </section>
    
{/literal}
