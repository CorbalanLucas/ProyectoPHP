function validar(){
    let valido = true;

    let nombre=document.getElementById("inputNombre").value;
    let descripcion=document.getElementById("inputDescripcion").value;
    let imagen=document.getElementById("inputImagen").value;
    let plataforma=document.getElementById("inputPlataforma").value;
    let url=document.getElementById("inputUrl").value;
    let genero=document.getElementById("inputGenero").value;
        
        if (nombre=='') {
            document.getElementById('obligatorioNombre').style.display='inline';
            valido=false;
        }else{
            document.getElementById('obligatorioNombre').style.display='none';
        }
        
        //valido max 250 caracteres, puede estar vacio
        if (descripcion.length>250){            
            document.getElementById('obligatorioDescripcion').style.display='inline';
            valido=false;              
        }else{            
            document.getElementById('obligatorioDescripcion').style.display='none';
        }

        if (imagen==''){
            document.getElementById('obligatorioImg').style.display='inline';
            valido=false;
        }else{
            document.getElementById('obligatorioImg').style.display='none';
        }
        
        if (plataforma==''){
            document.getElementById('obligatorioPlataforma').style.display='inline';
            valido=false;
        }else{
            document.getElementById('obligatorioPlataforma').style.display='none';
        }
        
        if (genero==''){
            document.getElementById('obligatorioGenero').style.display='inline';
            valido=false;
        }else{
            document.getElementById('obligatorioGenero').style.display='none';
        }
        
        //valido max 80 caracteres, puede estar vacio
        if (url.length>80){
            document.getElementById('obligatorioURL').style.display='inline';
            valido=false;
        }else{
            document.getElementById('obligatorioURL').style.display='none';  
        }
        
        event.preventDefault();
}


function resetCampos(){

    let nombre=document.getElementById("inputNombre").value;
    let descripcion=document.getElementById("inputDescripcion").value;
    let imagen=document.getElementById("inputImagen").value;
    let plataforma=document.getElementById("inputPlataforma").value;
    let url=document.getElementById("inputUrl").value;
    let genero=document.getElementById("inputGenero").value;

    /*OCULTO ERROR*/
    document.getElementById('obligatorioURL').style.display='none';  
    document.getElementById('obligatorioGenero').style.display='none';
    document.getElementById('obligatorioNombre').style.display='none';
    document.getElementById('obligatorioDescripcion').style.display='none';
    document.getElementById('obligatorioImg').style.display='none';
    document.getElementById('obligatorioPlataforma').style.display='none';

    //location.reload( forceGet );    


}

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