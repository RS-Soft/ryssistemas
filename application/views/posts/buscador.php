
	<div class="container container_post_index">
		<!--<h2 class="text-center"><?= $titulo ?></h2>
		<br>-->
		
		<?php if(isset($posts)) : ?>

			<?php if(count($posts) == 0) : ?>
			<h2 class="text-center">Resultados de la Búsqueda</h2>
			<br>

			<div class="container" style="margin-top: 58px; margin-left:1.3em;">
				<p style="font-size: 1.3em;"> No se han encontrado resultados para tu búsqueda (" <b><?= $text_search ?></b> "). </p>
				<p style="margin-top:1em; font-size: 1.3em;">Sugerencias:</p>
				<ul style="margin-left:1.3em; font-size: 1.12em;">
					<li>Asegúrate de que todas las palabras estén escritas correctamente.</li>
					<li>Prueba diferentes palabras clave.</li>
					<li>Prueba palabras clave más generales.</li>
				</ul>
			</div>

			<?php else : ?>

				<?php foreach($posts as $post) : ?>
					<h2 class="text-center"><?= $titulo ?></h2>
					<br>
					<hr>
					<h3><?php echo $post['titulo']; ?></h3>
					<div class="row">
						<div class="col-md-3">
							<img class="post-thumb" src="<?php echo site_url(); ?>assets/img/posts/<?php echo $post['post_image']; ?>">
						</div>
						<div class="col-md-9">
							<small class="post-date">Posteado: <?php echo $post['created_at']; ?> en <strong><?php echo $post['name']; ?></strong></small><br>

							<!-- El limitador indica la cantidad de palabras que se mostraran en cada post del "posts/index", en nuesro caso "50"-->
							<?php echo word_limiter($post['body'], 60); ?>
							<br><br>
							<p><a class="btn" id="btn_post_index" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Leer Más</a></p>
						</div>
					</div>
					<br>

				<?php endforeach; ?>

			<?php endif; ?>

		<?php endif; ?>

		<br><br>
		<!--<div class="pagination-links text-center">
			
		<?php //echo $this->pagination->create_links(); ?>

		</div>-->
	</div>