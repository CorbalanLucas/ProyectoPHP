<!DOCTYPE html>
<html lang="en">

<head>
    <title>TP - ENTREGA 1</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
    <header class="d-flex justify-content-around p-1 align-items-center">

        <div>
            <img class="logo" src="../img/logoL&L.png" alt="logoPagina" height="100px" width="100px">     
        </div>

        <div>
            <h1>
                L&L GAMES
            </h1>
        </div>
        
        <div>
            <button class="boton" onclick="location.href='../index.php'">
                HOME
            </button>
        </div>
    </header>
    <main>
        <div id="contenedorForm">
            <form id="formularioCarga" action="../cargarTabla.php" method="POST" enctype="multipart/form-data">
                <div >
                    <h3>CARGAR JUEGO </h3>
                        <div class="m-2">
                            <!--Obligatorio-->                 
                            <input id="inputNombre" name="inputNombre" type="text" placeholder="NOMBRE">
                            <p id="obligatorioNombre" class="obligatorio">*</p>
                        </div>                    
                        <div class="m-2">
                            <!--Obligatorio-->
                            <input id="inputImagen" name="inputImagen" type="file">
                            <p id="obligatorioImg" class="obligatorio">*</p>
                        </div>
                        <div class="m-2">
                            <!--Max 255 caracteres-->
                            <textarea id="inputDescripcion" name="inputDescripcion" placeholder="DESCRIPCION" rows="3" cols="30" type="textarea"></textarea>
                            <p id="obligatorioDescripcion" class="obligatorio fs-6">Max 255 caracteres</p>
                        </div>
                        <div class="m-2">
                            <!--Opcion-->
                            <p class="parrafoFormulario d-inline">PLATAFORMA</p>
                                <select name="inputPlataforma" id="inputPlataforma">
                                    <option value="">
                                        -
                                    </option>
                                    <option value=1>
                                        PC
                                    </option>
                                    <option value=2>
                                        PlayStation
                                    </option>
                                    <option value=3>
                                        Xbox
                                    </option>
                                </select>
                                <p id="obligatorioPlataforma" class="obligatorio">*</p>
                        </div>
                        <div class="m-2">
                            <input id="inputUrl" name="inputUrl" type="url" placeholder="URL JUEGO">
                            <p id="obligatorioURL" class="obligatorio fs-6">Max 80 caracteres</p>
                        </div>
                        <div class="m-2">
                            <p class="parrafoFormulario d-inline">GENERO</p>
                                <select  id="inputGenero" name="inputGenero">
                                    <option value="">
                                        -
                                    </option>
                                    <option value=1>
                                        Accion
                                    </option>
        
                                    <option value=2>
                                        Deporte
                                    </option>
        
                                    <option value=3>
                                        Terror
                                    </option>
        
                                    <option value=4>
                                        Estrategia
                                    </option>
        
                                    <option value=5>
                                        Aventura
                                    </option>
                                </select>
                            <p id="obligatorioGenero" class="obligatorio">*</p>
                        </div>
                        <div>
                            <a class="boton" id="enviarForm" href="js/validacion.js"> Enviar </a>
                            <input class="boton" type="reset" onclick="resetCampos()" value="BORRAR">
                        </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>Lucas Corbalan - Lucas Di Pardo</p>
        <p>2023</p>
    </footer>


    <!--Js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="../js/validacion.js"></script>

</body>

</html>