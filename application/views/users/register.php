<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

	<div class=" container form_create_usuario_margin">
		<?php echo form_open('users/register'); ?>
			<div class="row">
				<div class="col-md-4 col-center">

					<h1 class="text-center"><?= $titulo; ?></h1>
					<br>
					<div class="form-group">
						<h6>Nombre</h6>
						<input type="text" class="form-control" name="name" placeholder="Nombre">
					</div>
					<div class="form-group">
						<h6>Código Postal</h6>
						<input type="text" class="form-control" name="zipcode" placeholder="Código Postal">
					</div>
					<div class="form-group">
						<h6>Email</h6>
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<h6>Usuario</h6>
						<input type="text" class="form-control" name="username" placeholder="Usuario">
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

<br>
<br>