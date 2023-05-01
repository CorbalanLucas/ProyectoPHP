<?php
    $valido = true;
    if((empty($_POST['inputNombre'])) || (empty($_POST['inputDescripcion'])) || (empty($_POST['inputImagen'])) || (empty($_POST['inputPlataforma'])) || (empty($_POST['inputUrl'])) || (empty($_POST['inputGenero']))){
        $valido = false;
        var_dump($_POST['inputNombre']);
        var_dump($_POST['inputDescripcion']);
        var_dump($_POST['inputImagen']);
        var_dump($_POST['inputPlataforma']);
        var_dump($_POST['inputUrl']);
        var_dump($_POST['inputGenero']);
    }
    else{
        $descripcion = $_POST['inputDescripcion'];
        if(strlen($descripcion)>255){
            $valido = false;
        }
        else {
            $url = $_POST['inputUrl'];
            if(strlen($url)>80){
                $valido = false;
            }
            else {
                $nombre = $_POST['inputNombre'];
                $imagen = $_POST['inputImagen'];
                $plataforma = $_POST['inputPlataforma'];
                $genero = $_POST['inputGenero'];
            }
        }
    }

    if($valido==true){
        include 'conexionBD.php';
        $sql = "INSERT INTO juegos (nombre, descripcion, id_genero, id_plataforma) VALUES ('$nombre', '$descripcion', '$genero', '$plataforma');";
        if ($conn->query($sql) === TRUE) {
            session_start();
            $_SESSION['nombre'] = $nombre;
            header('Location: index.php');
            die();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        header('Location: pages/altaJuego.php');
        die();
    }
?>