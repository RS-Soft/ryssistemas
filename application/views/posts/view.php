
	<div class="container footer_view_post_margin">
		<h2><?php echo $post['titulo']; ?></h2>

		<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>

		<div class="container text-center">
			<img class="img-fluit img_por_post_size" alt="Responsive image" src="<?php echo site_url(); ?>assets/img/posts/<?php echo $post['post_image']; ?>">
		</div>
		<br><br>

		<div class="post-body">
			<?php echo $post['body'];?>
		</div>

		<br>

		<?php if($this->session->userdata('user_id') == $post['user_id']) : ?>
			<hr>

			<!--Botón Editar-->
			<div class="row">
				<div class="col-md-3" id="btn_post-editeli">
					<a class="btn btn-success" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Editar</a>
				</div>
				
				<div class="col-md-3" id="btn_post-editeli">
					<!--  Al utilizar el form_open, ya indica el "ref" y el "action" correspondiente -->
					<!-- AL presionar el botón "delete", el form envia el "id" del post que se desea eliminar-->

					<?php echo form_open('/posts/delete/'.$post['id']); ?>
						
						<!--Botón Eliminar-->
						<input type="submit" value="Eliminar" class="btn btn-danger">

					</form>
				</div>
			</div>
		<?php endif; ?>
		<br>
		<hr>
		
		<div class="sharethis-inline-share-buttons"></div>
		
		<h3>Comentarios</h3>

		<!-- 	Como esta página recibe la variable $commets(y no se la definió en esta página), se debe colocar un "isset($comments)" para comprobar que no este vacio y asi no ocacione un "Error"  -->
		<?php if(isset($comments)) :?>
			<?php foreach($comments as $comment) : ?>
				<div class="alert alert-secondary" role="alert">
					<h6><?php echo $comment['body']; ?> [ comentado por: <strong><?php echo $comment['name']; ?></strong>  ]</h6>
				</div>
			<?php endforeach; ?>
		<?php else : ?>
			<p>No se han realizado comentarios.</p>
		<?php endif; ?>


		<hr>
		<h3>Agregar Comentario</h3>

		<!-- Esta línea es para finalizar la validación y que no se siga ejecutando. Debido a que ya cumplio su propósito-->
		<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

		<!-- 											FORMULARIO DE COMENTARIO						-->
		<?php echo form_open('comments/create/'.$post['id']); ?>
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Descripción</label>

				<script src="<?php base_url(); ?>emoji-master/jquery-3.3.1.min.js"></script>	
				<link rel="stylesheet" href="<?php base_url(); ?>emoji-master/emojionearea.min.css">
				<script src="<?php base_url(); ?>emoji-master/emojionearea.min.js"></script>

				<textarea name="body" id="mytext"></textarea>
				
			</div>
			<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
			<button class="btn btn-primary" type="submit">Comentar</button>
		</form>
	</div>
<!-- 											FORMULARIO DE COMENTARIO						-->



	<script type='text/javascript'>
		$("#mytext").emojioneArea({
			pickerPisition: "right"
		});
	</script>




