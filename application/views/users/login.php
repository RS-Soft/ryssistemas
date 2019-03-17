
	<div class="form_loggin_margin">
		<?php echo form_open('users/login'); ?>
			<div class="row" id="form_loggin">
				<!-- 	Centramos la columna en el medio de la pantalla-->
				<div class="col-md-5 col-center">
					<h1 class="text-center"><?php echo $titulo; ?></h1>
					<br><br>
					<div class="form-group">
						<!-- 	el "required="autofocus" es para que el cursor se posicione en este campo inicialmente-->
						<input type="text" name="username" class="form-control" placeholder="Ingrese el Usuario" required="autofocus">
					</div>
					<div class="form-group">
						<!-- 	el "required="autofocus" es para que el cursor se posicione en este campo inicialmente-->
						<input type="password" name="password" class="form-control" placeholder="Ingrese el Contraseña" required="autofocus">
					</div>
					<br>
					<button id="btn_loggin" type="submit" class="btn btn-block font-weight-bolt text-light">Ingresar</button>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
