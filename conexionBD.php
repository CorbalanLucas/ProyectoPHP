<?php
//armar la conexion
$conn = new mysqli("localhost", "root", "", "juegos");   //conexion con ese usuario contraseña y nombre de base
if($conn->connect_errno){
    echo "Fallo al conectar a MySQL: " . $conn->connect_error;
}
//$result = mysqli_query($link, 'SELECT * FROM generos');  //recibe conexion y consulta SQL - $result es un objeto con los datos de la consulta - Devuelve FALSE cuando algo se rompio

//if ($result){
  //  echo "Numero de filas recuperadas: " . mysqli_num_rows($result);
//}else{
 //   die('Query Invalido: '. mysqli_error($link));
//}

//recorrer fila
//while ($row = mysqli_fetch_array($result)){ //toma elemento y avanza el puntero, pero en la variable se guarda para operar con el dato
//    echo $row ['nombre']; //la clave es la que le dimos en la base de datos

    /* echo $row ['descripcion'];
    echo $row ['genero'];
    echo $row ['firstname'];
    */
//}

//insertar en tabla
//mysqli_query($link, "INSERT INTO nombres (nombre) VALUES ('Ejemplo2')");
//insertamos de la tabla plataformas, los valores ejemplo1

//echo "Id creado" . mysqli_insert_id($link); //imprimimos el id que nos dio al insertar un dato nuevo
?>