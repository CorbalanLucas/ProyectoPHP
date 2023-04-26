<?php
if(!empty($_POST)){
    $nombre = $_POST['inputNombre'];
    $imagen = $_POST['inputImagen'];
    $descripcion = $_POST['inputDescripcion'];
    $plataforma = $_POST['inputPlataforma'];
    $url = $_POST['inputUrl'];
    $genero = $_POST['inputGenero'];

    $valido = true;
    if($nombre == ""){
        $valido = false;
    }
    if($imagen == ""){
        $valido = false;
    }
    if(strlen($descripcion)>255){
        $valido = false;
    }
    if($plataforma == 0){
        $valido = false;
    }
    if(strlen($url)>80){
        $valido = false;
    }
    if($genero == 0){
        $valido = false;
    }
    if($valido==true){
        include 'conexionBD.php';
        $sql = "INSERT INTO juegos (nombre, descripcion, id_genero, id_plataforma) VALUES ('$nombre', '$descripcion', '$genero', '$plataforma');";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
            die();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        header('Location: pages/altaJuego.php');
        die();
    }
}
?>