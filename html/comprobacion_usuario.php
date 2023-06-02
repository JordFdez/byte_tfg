<?php
session_start();

if ( $_SESSION['nombre'] == "" ){
    header("Location: ./index.php ");
}
else{
    header("Location: ./paginaprincipal_usuario.php ");
}

?>