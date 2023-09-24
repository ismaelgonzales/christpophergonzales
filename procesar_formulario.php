<!DOCTYPE html>
<html>
<head>
    <title>Procesando Formulario</title>
</head>
<body>
    
<h2>Datos de formulario</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $correo = $_POST ["correo"];
    $contrasena = $_POST ["contrasena"];
    echo $correo;
    echo "<table border='3'>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";
    echo "<tr><td>Correo</td><td>".$correo."</td></tr>";
    echo "<tr><td>Contraseña</td><td>" . $contrasena . "</td></tr>";
    echo "</table>";
}else{
    echo "Acceso no permitido";
}

?>

</body>
</html>