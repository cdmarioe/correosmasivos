<?php
include 'header.php';
?>

<div class="container col-md-4" style="text-align:center">
    <div class="container p-1 my-1 bg-primary text-white" id="contacto">
      <h2>Envio de Correos Masivos</h2>
	</div>
	
<footer class="w3-light-grey w3-padding-64 w3-center">  
  <form style="margin:auto;width:100%" role="form" method = "post" action = "envio.php" enctype="multipart/form-data">
    
    <div class="form-group">
      <label><b>Empresa</b></label>
      <input class="form-control" type="text" name="nombre" placeholder="Nombre de tu Empresa" required>
    </div>
    <div class="form-group">
      <label><b>Correo</b></label>
      <input class="form-control" type="email" name="correo" placeholder="Correo de quien envia" required>
    </div>
	<div class="form-group">
      <label><b>Asunto del correo</b></label>
      <input class="form-control" type="text" name="asunto" placeholder="Ej: Promocion del Mes" required>
    </div>
    <!--div class="form-group">
      <label><b>Mensaje</b></label>
      <textarea class="form-control" name ="mensaje" rows = "3" required></textarea>
    </div-->
	<div>
		<label for = "name"><b>Enviar Flyer</b></label>
        <input type="file" class="" name="file" id = "file" accept=".jpeg, .png, .jpg, .svg, .gif" required />
    </div>
    <button type="submit" class="btn btn-block btn-primary" name="enviar" onclick="hizoClick()" value="enviar">Enviar</button>
	
  </form>
  <br>
  <p><strong>Powered by: </strong><a href="https://wire-less.com.mx" target="_blank" class="w3-hover-text-green">Wire-Less Solutions</a></p>
</footer>
</div> 
</body>
</html>