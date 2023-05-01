let cerrar = document.getElementById("cerrar");
let modal = document.getElementById("miModal");
let botonCerrar = document.getElementById("botonCerrar");
function validarFiltro(){
    let nombre=document.getElementById("inputNombreFiltro");
    let plataforma=document.getElementById("inputPlataformaFiltro");
    let genero=document.getElementById("inputGeneroFiltro");
    let ordenar=document.getElementById("inputOrdenarFiltro");

    if((nombre.value=="")&&(plataforma.value=="")&&(genero.value=="")&&(ordenar.value=="")){
        nombre.style.borderColor="red";
        plataforma.style.borderColor="red";
        genero.style.borderColor="red";
        ordenar.style.borderColor="red";
    }
    else{
        nombre.style.borderColor="#dee2e6";
        plataforma.style.borderColor="#dee2e6";
        genero.style.borderColor="#dee2e6";
        ordenar.style.borderColor="#dee2e6";
    }
}
cerrar.onclick = function() {
    modal.style.display = "none";
    document.body.classList.remove("modalAbierto");
}
botonCerrar.onclick = function() {
    modal.style.display = "none";
    document.body.classList.remove("modalAbierto");
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.body.classList.remove("modalAbierto");
    }
}