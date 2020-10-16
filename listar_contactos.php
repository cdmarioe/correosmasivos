<?php
include 'header.php';
?>

<nav class="navbar navbar-expand-sm bg-white">
	<form class="form-inline" role="search" name="buscar" action="listar_contactos.php">
		<div class="form-group">
		<input type="hidden" name="page" value="listar_contactos" />
		<input name="contactos" class="form-control mr-sm-2" type="text" placeholder="Buscar">
		<button class="btn btn-success" type="submit">Buscar</button>
	</form>
</nav>

<center>
	<h1> Lista de Contactos</h1>
	<font size="verdana">
</center>

<?php
  include "dbconf.php";
?>

<?php
  $inicial= $_REQUEST['contactos'];
  $conexion = new mysqli($server, $usuario, $contrasena, $base_de_datos); 
  $consulta = mysqli_query($conexion, "select * from correos where nombre like '%$inicial%' or id = '$inicial' or apellido = '$inicial' or telefono = '$inicial' or correo = '$inicial' or empresa = '$inicial' or giro = '$inicial'" ) or trigger_error('Error al ejecutar consulta. Detalles = ' . mysqli_error());
   if (mysqli_num_rows($consulta)==0) {
      echo "<h3 align='center'>";
      echo "No se a encontrado ningun registro.";
      echo "</h3>";
   }else{

?>

<div class="container">
	<div class="table-responsive">
		<table class="table table-striped table-hover thead-dark">
			
			<tr class="table-dark">
			  <td>ID</td>
			  <td>Nombre</td>
			  <td>Apellido</td>
			  <td>Telefono</td>
			  <td>Correo</td>
			  <td>Empresa</td>
			  <td>Giro</td>
			  <td align='center'>Acciones</td>
			</tr>
			
			<?php 
			  while ($contacto = mysqli_fetch_array($consulta)) {
			?>

			<tr>
			  <td><?php echo $contacto['id']; ?></td>
			  <td><?php echo $contacto['nombre']; ?></td>
			  <td><?php echo $contacto['apellido']; ?></td>
			  <td><?php echo $contacto['telefono']; ?></td>
			  <td><?php echo $contacto['correo']; ?></td>
			  <td><?php echo $contacto['empresa']; ?></td>
			  <td><?php echo $contacto['giro']; ?></td>
			<td align='center'>
			  <div class="btn-group btn-group-sm" role="group" aria-label="Acciones para los Contactos!">
				<a href="editar_contacto.php?page=editar_contacto&contacto=<?php echo $contacto['id']; ?>"  type="button" class="btn btn-default btn-primary" aria-label="Editar Contacto">
				  <span class="fas fa-edit"></span>
				
				<a href="eliminar_contacto.php?contacto=<?php echo $contacto['id']; ?>" type="button" class="btn btn-default btn-danger" aria-label="Eliminar Contacto">
				  <span class="fas fa-trash-alt"></span>
				</a>
			  </div>
			</td>
			</tr>

			<?php
				 }
			?>
		</table>

			<?php
				 }
			?>
	</div>
</div>
</body>
</html>
