<?php

include "dbconf.php";

$empresa = $_POST["empresa"];
$giro = $_POST["giro"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

// Creamos la coneccion a MySql
$db = new mysqli($server, $usuario, $contrasena, $base_de_datos); 

// Creamos la sentencias de MySql
$sql = "INSERT INTO correos(empresa,giro,nombre,apellido,telefono,correo,is_active,created_at) VALUES ('$empresa','$giro','$nombre','$apellido','$telefono','$correo','1',NOW())";

//Comprobamos la insercion de los datos
if (mysqli_query($db, $sql)) {
      echo '<script language="javascript">';
	  echo 'alert("Contacto agregado correctamente")';
	  echo '</script>';
	  echo "<META http-equiv='refresh' content='1;URL=http://$site/registro.php'> ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
mysqli_close($db);

?>


