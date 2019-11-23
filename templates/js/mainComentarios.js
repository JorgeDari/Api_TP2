'use strict';

var los_comentarios = new Vue ({
    el:'#los_comentarios',
    data: {
        subtitle: "Estoy renderizando con Vue",
        tasks:[]
    }
})

let btn_comentario = document.querySelector('#btnComentario');


btn_comentario.addEventListener('click', c=>{
        let el_libro = btn_comentario.getAttribute("name");
        getComentario(el_libro);
});




function getComentario(el_libro) {
    fetch("../api/comentario/" + el_libro)
    .then(response => response.json())
    .then(tasks => {
        los_comentarios.tasks = tasks; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));


function createComentario(task) {
    let element = `${task.titulo}: ${task.descripcion}`;
    
    if (task.finalizada == 1)
        element = `<strike>${element}</strike>`;
    else {
        element += `<a href="tarea/${task.id}">Ver</a> `;
        element += `<a href="finalizar/${task.id}">Finalizar</a> `;
        element += `<a href="borrar/${task.id}">Eliminar</a>`;
    }
        
    element = `<li>${element}</li>`;
    return element;  
}


function addComentario(el_libro) {
    
    let elComentario = document.querySelector("#btnSuComentario").value;
    let elPuntaje = document.querySelector("#su_puntaje").value;
    let div = document.querySelector("#div_contenedor");
    let data = {
        'descripcion' : elComentario,
        'puntaje' : elPuntaje,
        'fk_libro' : el_libro,
        'nombre_post' : 'jorge',        
    }

    fetch("../api/comentario/", {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json"
        },
        "body": JSON.stringify(data)
      })
      .then(response => {
        if (response.ok) {
            response.json().then(r => {
                getComentario(el_libro);
                div.innerHTML = `<div class="alert alert-success mt-2" role="alert">Se ha guardado con exito</div>`;
                console.log(r);
                
            });
        } else {
            div.innerHTML = `<div class="alert alert-danger mt-2" role="alert">Error Inesperado al guardar Legajo</div>`;
            console.log("ERROR");
        }
      })
      .catch(e => console.log(e));
}