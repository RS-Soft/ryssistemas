  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav" style="font-family: fuentetitulo">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="<?php echo base_url()?>">RySSistemas</a>
      </li>
      <li class="sidebar-nav-item">
      
        <?php echo form_open('posts/buscador',  'class = "form-inline"'); ?>
        <!--<form class="form-inline" action="buscador" method="POST">-->
          <div class="form-group">
            <input name="nombre_post" type="search" class="form-control" placeholder="Search..." aria-label="Search" style="max-width: 170px; margin-left: 15px;">
          </div>
          <button type="submit" class="btn btn-outline-success btn-dark" style="margin-left: 10px;"><i class="fa fa-search"></i></button>
        <?php echo form_close(); ?>

      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="<?php echo base_url('#page-top')?>">Página Principal</a>
      </li>
      
<?php

  //$dominio = $_SERVER["HTTP_HOST"]; //Obtemos la sección de la url "localhost"
  $rest = $_SERVER["REQUEST_URI"];  //Obtenemos el resto de la url que sigue a localhost.

  //$url_completa = $dominio.$rest;

  //echo $url_completa;

?>

<!--              Enlaces para las páginas de Actualidad       -->
      

      <!-- Los enlaces de "Inicar sesión" y "Registrarse" se mostraran si el estado del usuario es "Desconectado" | valor(!true) -->

      <!--  Si la url de la página actual no coincide con la del "if()" entonces se muestra el enlace "Noticias"-->
      <?php if( $rest != "/ryssistemas/posts" ) : ?>
          <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="<?php echo base_url(); ?>posts">Noticias</a>
          </li>
      <?php endif; ?>
      
      <!--  Si la url de la página actual no coincide con la del "if()" entonces se muestra el enlace "Noticias"-->
      <?php if( $rest != "/ryssistemas/categories" ) : ?>

          <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="<?php echo base_url(); ?>categories">Categorias</a>
          </li>

      <?php endif; ?>

      <!--      Se verifica, si el usuario que accede a la pagina de "login" ha iniciado sesión     -->
      <?php if(!$this->session->userdata('logged_in')) : ?>

        <!--  Si la url de la página actual no coincide con la del "if()" entonces se muestra el enlace "Iniciar Sesión"-->
        <?php if( $rest != "/ryssistemas/users/login" ) : ?>

            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="<?php echo base_url(); ?>users/login">Iniciar Sesión</a>
            </li>

        <?php endif; ?>

      <?php endif; ?>



      <!-- Estos enlaces se mostraran si el estado del usuario es "Conectado" | (true) -->
        <?php if($this->session->userdata('logged_in')) : ?>
          
          <!--  Si la url de la página actual no coincide con la del "if()" entonces se muestra el enlace "Nuevo Usuario"-->
          <?php if( $rest != "/ryssistemas/users/register" ) : ?>

              <li class="sidebar-nav-item">
                  <a class="js-scroll-trigger" href="<?php echo base_url(); ?>users/register">Nuevo Usuario</a>
              </li>

          <?php endif; ?>
          
          <!--  Si la url de la página actual no coincide con la del "if()" entonces se muestra el enlace "Crear Noticia"-->
          <?php if( $rest != "/ryssistemas/posts/create" ) : ?>

              <li class="sidebar-nav-item">
                  <a class="js-scroll-trigger" href="<?php echo base_url(); ?>posts/create">Crear Noticia</a>
              </li>

          <?php endif; ?>
          
          <!--  Si la url de la página actual no coincide con la del "if()" entonces se muestra el enlace "Crear Categoria"-->
          <?php if( $rest != "/ryssistemas/categories/create" ) : ?>

              <li class="sidebar-nav-item">
                  <a class="js-scroll-trigger" href="<?php echo base_url(); ?>categories/create">Crear Categoría</a>
              </li>

          <?php endif; ?>

              <li class="sidebar-nav-item">
                  <a class="js-scroll-trigger" href="<?php echo base_url(); ?>users/logout">Cerrar Sesión</a>
              </li>
        <?php endif; ?>


    </ul>
  </nav>