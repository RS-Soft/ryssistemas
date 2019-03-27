<h2 class="text-center"><?= $titulo; ?></h2>
<br>

<?php $ni = 0?>


<!-- Esta tabla se mostrará si el estado del usuario no es "Conectado" | (true) -->

<?php if(!$this->session->userdata('logged_in')) : ?>


	<div class="container-fluid" id="categorias-tble">
		<table class="table table-hover table-dark">

		  <thead>
		    <tr>
		      <th scope="col">Nro.</th>
		      <th scope="col">Nombre</th>
		    </tr>
		  </thead>

		  <tbody>
		    <!-- Se obtienen todas las categorias de la BD-->
			<?php foreach($categories as $category) : ?>

				<tr>
				  <td>

				  	<?php echo $ni = $ni + 1; ?>

				  </td>
			      <td>

			      	<!-- Creamos un link con el nombre de la categoria, y con su "id" asignado a su "href"-->
					<a class="text-light" href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>

			      </td>
			    </tr>  	

			<?php endforeach; ?>

		  </tbody>

		</table>
	</div>

<?php endif; ?>




<!-- Estos enlaces se mostraran si el estado del usuario es "Conectado" | (true) -->

<?php if($this->session->userdata('logged_in')) : ?>

	<div class="container table_category_margin">
		<table class="table table-hover table-dark">
		  <thead>
		    <tr>
		      <th scope="col"></th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Fecha de Creación</th>
		      <th scope="col">Eliminar</th>
		    </tr>
		  </thead>

		  <tbody>
		    <!-- Se obtienen todas las categorias de la BD-->
			<?php foreach($categories as $category) : ?>

				<tr>
				  <td>
				  	<?php echo $ni = $ni + 1; ?>
				  </td>
			      <td>
					<?php echo $category['name']; ?>
			      </td>

			      <td>
					<?php echo $category['create_at']; ?>
			      </td>

			      <td>
			      	<!-- Verificamos si el usuario que esta en la página, es el mismo que creo la categoría-->
					<!-- Si el usuario creo la categoría, entonces se le permite eliminarla-->
					<?php if($this->session->userdata('user_id') == $category['user_id']) : ?>
						<form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
							<input type="submit" class="btn btn-link bg-danger text-light" value="[X]">
						</form>
					<?php endif; ?>
			      </td>
			    </tr>  	

			<?php endforeach; ?>

		  </tbody>
		</table>
	</div>


<?php endif; ?>


