<?php
include "dbconf.php";
$sql = "DELETE FROM correos WHERE id = $_REQUEST[contacto];";
$conexion = new mysqli($server, $usuario, $contrasena, $base_de_datos); 

  if (mysqli_query($conexion, $sql) === TRUE) {
    //escrever aqui a mensagem de ok do delete.
    echo "<script>alert('Contacto eliminado correctamente');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://$site/listar_contactos.php'> ";
  } else {
    echo "ERROR AL ELIMINAR" . error;
    echo "<script>alert('Error al eliminar el contacto');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://$site/listar_contactos.php'> ";

  }
?>
