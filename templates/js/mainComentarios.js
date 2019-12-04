"use strict";

var los_comentarios = new Vue ({
    el:'#los_comentarios',
    data: {
        subtitle: 'Lista de comentarios por medio de CSR',
        comentarios:[],
        puntaje:0,
        nombre_post:''

    },
    methods:{
        agregarComentario (){
                console.log('Diste Click')
            }
         },

        deleteComent: function (event,idcomentario){
            fetch("api/libros/"+idcomentario,{
                "method" : "DELETE"
            })
            .then(response => response.json())
            .then( () => {
                getComentario(idcomentario);
                console.log("Consulta DELETE exitosa");
            })
            .catch(error => console.log(error));
            }
            
    
});

let btn_comentarioV = document.querySelector('#btnViewComentario');
// let btn_comentarioA = document.querySelector('#btnAddComentario')
//let btn_comentarioD = document.querySelector('#btnDeleteComentario')

btn_comentarioV.addEventListener('click', c=>{
    
        let el_libro = btn_comentarioV.getAttribute("name");
        getComentario(el_libro);
});

    // btn_comentarioA.addEventListener('click', c=>{
        
    //     let el_libro = btn_comentarioA.getAttribute("name");
    //     addComentario(el_libro);
    // });


function getComentario(el_libro) {
    fetch("api/libros/" + el_libro +"/comentarios")
    .then(response => response.json())	 
    .then(comentarios => {
        los_comentarios.comentarios = comentarios;         // similar a $this->smarty->assign("tasks", $tasks)
        los_comentarios.puntaje = hacerPromedio(comentarios);
      
    }).catch(error => console.log(error));
}


function addComentario(el_libro) {
    
    let elComentario = document.querySelector("#btnAddComentario").value;
    let elPuntaje = document.querySelector("#su_puntaje").value;
    let div = document.querySelector("#los_comentarios");
    let data = {
        'descripcion' : elComentario,
        'puntaje' : elPuntaje,
        'fk_libro' : el_libro,
        'nombre_post' : 'jorge',        
    }

    fetch("api/comentarios/", {
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

function hacerPromedio(comentarios){
    let Puntaje= 0;
    let cont = 0;
    for(let comentario of comentarios){
        Puntaje += Number(comentario.puntaje);
        cont++;
    }
    Puntaje = Puntaje/cont;
    let Promedio = Puntaje.toFixed(2);

    return Promedio;
}