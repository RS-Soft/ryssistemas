<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

	<div class=" container form_create_usuario_margin">
		<?php echo form_open('users/register'); ?>
			<div class="row">
				<div class="col-md-4 col-center">

					<h1 class="text-center"><?= $titulo; ?></h1>
					<br>
					<div class="form-group">
						<h6>Nombre</h6>
						<input type="text" class="form-control" name="name" placeholder="Nombre" onkeypress="return validar(event)">
					</div>
					<div class="form-group">
						<h6>Código Postal</h6>
						<input type="text" class="form-control" name="zipcode" placeholder="Código Postal" onkeypress="return numeros(event)">
					</div>
					<div class="form-group">
						<h6>Email</h6>
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<h6>Usuario</h6>
						<input type="text" class="form-control" name="username" placeholder="Usuario" onkeypress="return validar(event)">
					</div>
					<div class="form-group">
						<h6>Contraseña</h6>
						<input type="password" class="form-control" name="password" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<h6>Confirmación de Contraseña</h6>
						<input type="password" class="form-control" name="password2" placeholder="Confirmación de Contraseña">
					</div>
					<br>
					<button type="submit" class="btn btn-primary btn-block">Enviar</button>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>

	<!-- Código para ingresar solo letras, sin números-->
	<script type="text/javascript">
		function validar(e) { // 1
		tecla = (document.all) ? e.keyCode : e.which; // 2
		if (tecla==8) return true; // 3
		patron =/[A-Za-z\s]/; // 4
		te = String.fromCharCode(tecla); // 5
		return patron.test(te); // 6
		}
	</script>


	
	<!-- Cpdigo para no ingresar espacio, pero si letras y numeros-->
	<!--<script type="text/javascript">
	function validar(e) {
	  tecla = (document.all) ? e.keyCode : e.which;
	  return tecla!=32;
	}
	</script>-->



	<!-- Código para ingresar solo números, sin letras-->
	<script type="text/javascript">
		function numeros(e){
	    key = e.keyCode || e.which;
	    tecla = String.fromCharCode(key).toLowerCase();
	    letras = " 0123456789";
	    especiales = [8,37,39,46];
	 
	    tecla_especial = false
	    for(var i in especiales){
	 	if(key == especiales[i]){
	     tecla_especial = true;
	     break;
	        } 
	    }
	 
	    if(letras.indexOf(tecla)==-1 && !tecla_especial)
	        return false;
		}
	</script>
<br>
<br>