
	<div class="container container_post_index">
		<h2 class="text-center"><?= $titulo ?></h2>
		<br>

		<?php foreach($posts as $post) : ?>
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

		<br><br>
		<div class="pagination-links text-center">
			
		<?php echo $this->pagination->create_links(); ?>

		</div>
	</div>