<?php
  include 'header.php';
?>
<?php
  include "dbconf.php";
?>

<?php
	$inicial= $_REQUEST['contacto'];
	$conexion = new mysqli($server, $usuario, $contrasena, $base_de_datos);
	$consulta = mysqli_query($conexion, "select * from correos where id = '$inicial'" ) or trigger_error('Error al ejecutar la consulta. Detalles = ' . mysqli_error());
	$contacto = mysqli_fetch_array($consulta);
?>
<div class="container col-md-4">

	<center>
		<h1> Edicion del Contacto</h1>
		<font size="verdana">
	</center>
    
	<form class="form-horizontal" name="agenda" action="edit_contacto.php" method="post" >
		<strong>
			<div class="form-group">
			  <label>ID</label>
			  <input type="text" class="form-control" name="id" id="disabledInput" value="<?php echo $contacto['id']; ?>" autofocus required>
			</div>
			<div class="form-group">
			  <label>Nombre</label>
			  <input type="text" class="form-control" name="nombre" value="<?php echo $contacto['nombre']; ?>" autofocus required>
			</div>
			<div class="form-group">
			  <label>Apellido</label>
			  <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?php echo $contacto['apellido']; ?>" autofocus required>
			</div>
			<div class="form-group">
			  <label>Telefono</label>
			  <input type="tel" class="form-control" name="telefono" pattern="\[0-9]{10}$" placeholder="Ej: 6641234567" value="<?php echo $contacto['telefono']; ?>" required>
			</div>
			<div class="form-group">
			  <label>Correo</label>
			  <input type="mail" class="form-control" name="correo"  placeholder="example@example.com" value="<?php echo $contacto['correo']; ?>">
			</div>
			<div class="form-group">
			  <label>Empresa</label>
			  <input type="text" class="form-control" name="empresa"  placeholder="" value="<?php echo $contacto['empresa']; ?>">
			</div>
			<div class="form-group">
			  <label>Giro</label>
			  <input type="text" class="form-control" name="giro"  placeholder="" value="<?php echo $contacto['giro']; ?>">
			</div>
		</strong>
		
			<button type="submit" class="btn btn-primary">Modificar</button>
			<button type="reset" class="btn btn-primary">Limpiar</button>
	</form>
</div>
