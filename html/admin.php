
<?php
    $conexion = mysqli_connect("localhost", "root", "rootroot") or die ("No se puede conectar con el servidor");
    
    mysqli_select_db($conexion, "byte") or die ("No se puede seleccionar la base de datos");
    
    $instruccion1 = "select * from usuario";
    
    $consulta = mysqli_query($conexion, $instruccion1) or die ("Fallo en la consulta");
    
    $num_filas = mysqli_num_rows($consulta);
    
    if ($consulta){
        print "<form action='admin2.php' method='post'> <table><tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Contraseña</th><th>Fecha nacimiento</th><th>Telefono</th><th>Check</th></tr>";
        for ($i=0; $i<$num_filas; $i++){
        $resultado = mysqli_fetch_array($consulta);
        print "<tr><td>" . $resultado['id'] . "</td><td>" . $resultado['nombre'] . "</td><td>" . $resultado['apellido'] . "</td><td>" . $resultado['email'] . "</td><td>" . $resultado['passwd'] . "</td><td>" . $resultado['fecha_nacimiento'] . "</td><td>" . $resultado['telefono'] . "</td><td><input type='checkbox' name='check_list[]' value='".$resultado['id']."'></td></tr>";
        }
        print "</table>";
        print "<br><input type='submit' name='eliminar' value='Eliminar'>";
        print"</form>";
        print"<br><br><a href='./admin.html'>Volver al Menu</a>";
    
    }
    else{
        print "Error.";
    }
?>