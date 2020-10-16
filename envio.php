<?php
// Libreria PHPMailer
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
include "dbconf.php";
include "mailconf.php";

$nombre_empresa = $_POST["nombre"];
$correo_promocion = $_POST["correo"];
$asunto_promocion = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
  
// Creamos una instancia de PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = $seguridad; // secure transfer enabled REQUIRED for Gmail
$mail->Host = $servidor_smtp;
$mail->Port = $puerto_smtp; // or 587
$mail->IsHTML(true);
$mail->Username = $usuario_correo;
$mail->Password = $contrasena_correo;

// Conectamos a la base de datos 
$db = new mysqli($server, $usuario, $contrasena, $base_de_datos); 

//Comprobamos coneccion a la base de datos
/*
if($result)
{
    echo "Conectado con exito";
}
else
{
    echo "Revisa tu configuracion de coneccion a la base de datos";
}
*/

// Creamos la sentencias de MySql
$result = $db->query("select nombre,apellido,correo from correos;");

//Comprobamos la que hace correctamente
/*
if($result)
{
    echo "resultado obtenido";
}
else
{
    echo "No se obtuvo resultado";
}

*/

// Iniciamos el bucle para enviar multiples correos. 
while($row = $result->fetch_assoc())
   { 
    //Añadimos la direccion de quien envia el correo, anteponiendo el correo luego el nombre de la empresa 
    $mail->setFrom($correo_promocion, $nombre_empresa); 
    $mail->addAddress($row['correo'], $row['nombre']); 
    
	//Agregamos el asunto 
    $mail->Subject = $asunto_promocion;
	    
    //Creamos el mensaje
    $message = "Hola ".$row['nombre']." ".$row['apellido'].", $mensaje.";
	
	//Adjuntamos la imagen
	//$mail->Addattachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
	$uploaddir = "uploads/";
	//$cid = $_FILES['file']['name'];
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);
		if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile));
    
	//Agregamos el mensaje
    //$mail->msgHTML($message);
	
	$mail->AddEmbeddedImage($uploadfile,"my-attach","name");
	
	$mail->Body = '<img src="cid:my-attach">';
	//$mail->AltBody = $message;
	
	// Enviamos el correo 
    $mail->send();
	
    
	// Removemos los detinatarios para que los destinatarios no aparezcan en los correos. 
    $mail->ClearAddresses(); 
		
    }
?>
<?php
	 echo '<script language="javascript">';
	 echo 'alert("Correos enviados correctamente")';
	 echo '</script>';
	 echo "<META http-equiv='refresh' content='1;URL=http://$site'> ";
?>
