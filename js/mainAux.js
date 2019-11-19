'use strict';

let botonComentario = document.querySelector('#btnComentario');
let botonDeleteComentario = document.querySelector('#btnEliminarComentario');
let listadeComentario = document.getElementById('losComentarios');


botonComentario.addEventListener('click', c=>{
    let elidlibro = botonComentario.getAttribute("name");
    getComentario(elidlibro);
});

botonDeleteComentario.addEventListener('click', c=>{
    let elidlibro = botonDeleteComentario.getAttribute("name");
    deleteComentario(elidlibro);
});

function getComentario(idLibro){
    fetch('api/libros/'+idLibro+'/comentarios')
    .then(reponse=>reponse.json()).then(json=>{
        console.log(json);
    });
}

function deleteComentario(idLibro){
    fetch('api/libros/'+idLibro+'/comentarios', {method: 'DELETE'})
    .then(reponse=>reponse.json()).then(json=>{
        console.log(json);
    });
}


