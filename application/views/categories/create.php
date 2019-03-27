<div class="container form_create_category_margin">
	<h2 class="text-center" id="form_categoria"><?= $titulo; ?></h2>

	<!-- Esta linea muestra en pantalla los campos que son requeridos y que no fueron completados. El "div" es para mostrar el mensaje dentro de una celda de mensajes con fondo rojo -->
	<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
	<div class="row">
		<div class="col-md-5 col-center">
			<?php echo form_open_multipart('categories/create'); ?>

				<div class="form-group">
					<h5>Nombre</h5>
					<input type="text" class="form-control" name="name" placeholder="Ingrese el nombre">	
				</div>
				<br>
				<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
			</form>
		</div>
	</div>
</div>
