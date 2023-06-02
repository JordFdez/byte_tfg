<?php

if(isset($_REQUEST['atras'])){
    header('Location:./comprobacion_usuario.php');
}
$nombre = trim($_REQUEST['nombre']);
$correo = trim($_REQUEST['correo']);
$telefono = trim($_REQUEST['telefono']);
$fecha = $_REQUEST['fecha'];
$comentario = trim($_REQUEST['comentario']);

if (isset($_REQUEST['enviar'])){
        
        
        if ($nombre == "" || $telefono == "" || $fecha == "" || $comentario == ""){
        // print "Falta rellenar campos.";
        echo "<script language='javascript'>
            alert('Error!! Rellene los campos.');
            window.location.replace('./sorteo.html');
            </script>"; 
        }
        else{
        
        $conexion = mysqli_connect("localhost", "root", "rootroot") or die ("No se puede conectar con el servidor");
        
        mysqli_select_db($conexion, "BYTE") or die ("No se puede seleccionar la base de datos.");
        
        $instruccion1 = "select correo from sorteo where correo='$correo'";

        $instruccion2 = "insert into sorteo values (NULL, '$nombre', '$correo', $telefono, '$fecha', '$comentario')";

        
        $consulta = mysqli_query($conexion, $instruccion1) or die ("Fallo en la consulta");
        $num_filas = mysqli_num_rows($consulta);

        if ($num_filas == 1 ){
            echo "<script language='javascript'>
            alert('¡¡ CORREO REGISTRADO !!.');
            window.location.replace('./sorteo.html');
            </script>";
        }
        else{
            $consulta2 = mysqli_query($conexion, $instruccion2) or die ("Fallo en la consulta");
            
            if ($consulta2){
                echo "<script language='javascript'>
                alert('¡¡ SORTEO ENVIADO !!.');
                window.location.replace('./index.php');
                </script>";
            }
            else{
                echo "<script language='javascript'>
                alert(SORTEO NO ENVIADO!!.');
                window.location.replace('./index.php');
                </script>";
            }
        
        mysqli_close($conexion);
        
        }
}
}

?>