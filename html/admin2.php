<?php
if (empty($_POST['check_list'])){
    print "Selecciona algun usuario.";
}
else{
    foreach ($_POST['check_list'] as $usuario){
$conexion2 = mysqli_connect("localhost", "root", "rootroot") or die ("No se puede conectar con el servidor");

mysqli_select_db($conexion2, "byte") or die ("No se puede seleccionar la base de datos");

$instruccion2 = "delete from usuario where id=$usuario";

$consulta2 = mysqli_query($conexion2, $instruccion2) or die ("Fallo en la consulta");
    }
    print "Usuarios eliminados.";
    print"<br><br><a href='./admin.php'>Eliminar otro usuario</a>";
    print"<br><br><a href='./admin.html'>Volver al Menu</a>";
}

?>