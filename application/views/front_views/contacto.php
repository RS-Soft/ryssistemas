
<h1 class=" text-center"><b>Contacta con Nosotros</b></h1>
<div class="container text-center "><br>
  <div class="row">
    <div class="col-md-6">
      <div class="container-fluid">
        <div class="form-group">
          <img class="img-responsive rounded-circle" src="assets/img/rys-black.png" height="318" width="400">
        </div>
        <div class="form-group">
          <p>Cualquier duda que tengas no dudes en comunicarte con nosotros.</p>
          <p>Teléfono: </p>
          <p>Email: </p>
          <p>Dirección: </p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6">
    
		<form action="<?php echo base_url('')?>" method="post" accept-charset="utf-8" class="form-signin" role="form" id="myForm">
			<div class="form-group">
    			<label for="name">Nombre:</label>
    			<input type="text" class="form-control" id="name" name="name" required>
  			</div>
  			<div class="form-group">
    			<label for="lname">Apellido:</label>
    			<input type="text" class="form-control" id="lname" name="lname" required>
  			</div>
  			<div class="form-group">
    			<label for="email">Correo Electronico:</label>
    			<input type="email" class="form-control" id="email" name="email" required>
  			</div>
  			<div class="form-group">
    			<label for="asunto">Asunto:</label>
    			<input type="text" class="form-control" id="asunto" name="asunto" required>
  			</div>
  			<div class="form-group">
    			<label for="msj">Mensaje:</label>
    			<textarea class="form-control" maxlength="200" rows="5" id="msj" name="msj" required></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" class="btn btn-danger" onclick="formReset()" value="Vaciar campos"> 
		</form>

    
    </div>
  </div>
</div><br>