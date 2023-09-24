<?php
$host="localhost";
$correo="root";
$contrasena="";
$base_de_datos="entregable";

$conexion=new mysqli($host,$correo,$contrasena,$base_de_datos);

if($conexion->connect_error){
    die("La conexión a la base de datos falló:".$conexion->connect_error);
}else{
    echo  "la conexion fue exitosa.";
}
?>