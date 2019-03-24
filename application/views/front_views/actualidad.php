
<!--<div class="container">
<img class="img-rounded" src="assets/img/enconst.gif">
</div>-->

	<h2><?= $titulo ?></h2>

	<?php  foreach($posts as $post) : ?>

	<h3><?php echo $post['titulo']; ?></h3>

	<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>

	<?php echo $post['body']; ?>
	
	<br><br>
	
	<p><a class="btn btn-default" href="<?php echo site_url('/actualidad/'.$post['slug']); ?>"> Read More</a></p>

	<?php endforeach; ?>
