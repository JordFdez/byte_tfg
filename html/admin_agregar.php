<?php

$nombre = trim($_REQUEST['nombre']);
$apellido = trim($_REQUEST['apellidos']);
$correo = trim($_REQUEST['correo']);
$passwd = trim($_REQUEST['contraseña']);
$fecha = trim($_REQUEST['fecha_nacimiento']);
$telefono = trim($_REQUEST['telefono']);


if ($nombre == "" || $apellido == "" || $correo == "" || $passwd  == "" || $fecha == "" || $telefono == ""){
    print "Campos vacios";
}
else{

$conexion = mysqli_connect("localhost", "root", "rootroot") or die ("No se puede conectar con el servidor");

mysqli_select_db($conexion, "byte") or die ("No se puede seleccionar la base de datos.");

$intruccion = "insert into usuario values (NULL, '$nombre', '$apellido', '$correo', MD5('$passwd'), '$fecha', $telefono)";

$consulta = mysqli_query($conexion, $intruccion) or die ("Fallo en la consulta");

if ($consulta){
    print "Usuario añadido!!";
    print"<br><br><a href='./admin_agregar.html'>Agregar otro usuario</a>";
    print"<br><br><a href='./admin.html'>Volver al Menu</a>";
}
else{
    print "Error!!";
}

mysqli_close($conexion);

}

?>