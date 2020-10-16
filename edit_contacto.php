<?php
include "dbconf.php";
?>

<?php
$sql = "UPDATE correos

SET
nombre = '$_POST[nombre]',
apellido = '$_POST[apellido]',
telefono = '$_POST[telefono]',
correo = '$_POST[correo]',
empresa = '$_POST[empresa]',
giro = '$_POST[giro]'

WHERE

id = $_POST[id];";

//echo $sql;
$conexion = new mysqli($server, $usuario, $contrasena, $base_de_datos);
$query = mysqli_query($conexion, $sql);
//Verificar si se registro correctamente
if ($query == true) {
    echo "<script>alert('Usuario Editado correctamente');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://$site/listar_contactos.php'> ";


  }
else {
    echo "No fue posible editar el contacto, revise que haya agregado los datos correctamente de lo contrario pongase en contacto con el administrador del sistema <br><br>".$conexion ->error.mysqli_error();
}
?>
