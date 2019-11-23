{literal}
    <section id="los_comentarios">
        <h3> {{ subtitle }} </h3>
    
        <ul>
           <li v-for="task in tasks ">
             <span {{ task.descripcion }} - {{task.puntaje}} </span> 
    
                    <a :data-id="task.id" class="btn-eliminar" href="#">eliminar</a>
                    <a :data-id="task.id" class="btn-completar" href="#">completar</a>
           </li> 
        </ul>
    </section>
    


{/literal}
