<?php
include 'header.php';
?>

<div class="container col-md-4" style="text-align:center">
    <div class="container p-1 my-1 bg-success text-white" id="contacto">
      <h2>Alta de Clientes</h2>
	</div>
	
<footer class="w3-light-grey w3-padding-64 w3-center">  
  <form style="margin:auto;width:100%" role="form" method = "post" action = "alta.php">
    
    <div class="form-group">
      <label><b>Empresa</b></label>
      <input class="form-control" type="text" name="empresa" placeholder="Nombre de la empresa" required>
    </div>
    <div class="form-group">
      <label><b>Giro</b></label>
      <input class="form-control" type="text" name="giro" placeholder="Ej: Plomeria" required>
    </div>
	<div class="form-group">
      <label><b>Nombre</b></label>
      <input class="form-control" type="text" name="nombre" placeholder="Nombre del Contacto" required>
    </div>
    <div class="form-group">
      <label><b>Apellido</b></label>
      <input class="form-control" type="text" name="apellido" placeholder="Apellido del Contacto" required>
    </div>
    <div class="form-group">
      <label><b>Telefono</b></label>
      <input class="form-control" type="text" name="telefono" pattern="\[0-9]{10}$" placeholder="Ej: 6641010000" required>
    </div>
	<div class="form-group">
      <label><b>Correo</b></label>
      <input class="form-control" type="email" name="correo" placeholder="Ej: ejemplo@correo.com" required>
    </div>

    <button type="submit" class="btn btn-block btn-success" name="alta" onclick="hizoClick()" value="alta">Dar de Alta</button>
	
  </form>
  <br>
  <p><strong>Powered by: </strong><a href="https://wire-less.com.mx" target="_blank" class="w3-hover-text-green">Wire-Less Solutions</a></p>
</footer>
</div> 
</body>
</html>