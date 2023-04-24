<!DOCTYPE html>
<html lang="en">

<head>
    <title>TP - ENTREGA 1</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--CSS-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="d-flex justify-content-around p-1 align-items-center">

        <div>
            <img class="logo" src="img/logo.png" alt="logoPagina">     
        </div>

        <div>
            <h1>
                L&L GAMES
            </h1>
        </div>

        <div>
            <button class="boton" onclick="location.href='pages/altaJuego.php'">
                AGREGAR JUEGO
            </button>
        </div>
    </header>

    <main>
        <div class="filtrado p-2">
            <div class="row g-3 justify-content-around  p-3">

                <div class="col-3">
                  <input id="inputNombreFiltro" type="text" class="form-control" placeholder="NOMBRE" aria-label="Nombre">
                </div>

                <div class="col-2">
                    <label class="visually-hidden" for="autoSizingSelect">Genero</label>
                    <select id="inputGeneroFiltro" class="form-select">
                      <option value="" selected>GENERO</option>
                      <option value="1">Acción</option>
                      <option value="2">Terror</option>
                      <option value="3">Deporte</option>
                    </select>
                </div>

                <div class="col-2">
                    <label class="visually-hidden" for="autoSizingSelect">Plataforma</label>
                    <select id="inputPlataformaFiltro" class="form-select">
                      <option value="" selected>PLATAFORMA</option>
                      <option value="1">PS5</option>
                      <option value="2">Xbox One</option>
                      <option value="3">PC</option>
                    </select>
                </div>

                <div class="col-2">
                    <label class="visually-hidden" for="autoSizingSelect">Ordenar</label>
                    <select id="inputOrdenarFiltro" class="form-select">
                      <option value="" selected>ORDENAR</option>
                      <option value="1">Alfabeticamente</option>
                      <option value="2">Año de lanzamiento</option>
                    </select>
                </div>

                <div class="col-1">
                    <button type="submit" onclick="validarFiltro()" class="boton">Filtrar</button>
                  </div>
            </div>
        </div>
        <table class="col-12" width="500px">
            <tr>
                <td>
                    <div class="card mb-3 m-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/juego1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOMBRE</h5>
                                    <p class="card-text"><small class="text-body-secondary">GENERO</small></p>
                                    <p class="card-text">DESCRIPCION</p>
                                    <p class="card-text"><small class="text-body-secondary">PLATAFORMA</small></p>
                                    <a href="">LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card mb-3 m-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/juego2.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOMBRE</h5>
                                    <p class="card-text"><small class="text-body-secondary">GENERO</small></p>
                                    <p class="card-text">DESCRIPCION</p>
                                    <p class="card-text"><small class="text-body-secondary">PLATAFORMA</small></p>
                                    <a href="">LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card mb-3 m-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/juego3.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOMBRE</h5>
                                    <p class="card-text"><small class="text-body-secondary">GENERO</small></p>
                                    <p class="card-text">DESCRIPCION</p>
                                    <p class="card-text"><small class="text-body-secondary">PLATAFORMA</small></p>
                                    <a href="">LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <!--Segunda Fila-->

            <tr>
                <td>
                    <div class="card mb-3 m-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/juego4.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOMBRE</h5>
                                    <p class="card-text"><small class="text-body-secondary">GENERO</small></p>
                                    <p class="card-text">DESCRIPCION</p>
                                    <p class="card-text"><small class="text-body-secondary">PLATAFORMA</small></p>
                                    <a href="">LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card mb-3 m-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/juego5.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOMBRE</h5>
                                    <p class="card-text"><small class="text-body-secondary">GENERO</small></p>
                                    <p class="card-text">DESCRIPCION</p>
                                    <p class="card-text"><small class="text-body-secondary">PLATAFORMA</small></p>
                                    <a href="">LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card mb-3 m-2" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/juego6.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">NOMBRE</h5>
                                    <p class="card-text"><small class="text-body-secondary">GENERO</small></p>
                                    <p class="card-text">DESCRIPCION</p>
                                    <p class="card-text"><small class="text-body-secondary">PLATAFORMA</small></p>
                                    <a href="">LINK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

        </table>
        <footer >
            <p>Lucas Corbalan - Lucas Di Pardo</p>
            <p style="margin-bottom:0px; padding-bottom: 16px;">2023</p>
        </footer>



    </main>




    <!--Js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="js/validacion.js"></script>
</body>

</html>