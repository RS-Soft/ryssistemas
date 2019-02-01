<nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">

    
    <a class="navbar-brand" href="#">
    <img src="<?php echo base_url('assets/img/rys.png')?>" width="90" height="60" alt="">
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()?>">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('quienessomos')?>">Quiénes Somos</a>
            </li>


            <li class="nav-item dropdown d-block">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comercialización
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('tipodeentrega')?>"> Tipos de entregas</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('formadeenvio')?>">Formas de envios</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('formadepago')?>">Formas de pago</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart"></i>
      Servicios Informaticos
    </a>

    
    
            </li>



            <li class="nav-item">
                <a class="nav-link d-block" href="<?php echo base_url('contacto')?>">Información de Contacto</a>

            </li>

            <li class="nav-item">

                <a class="nav-link d-block" href="<?php echo base_url('terminoyuso')?>">Término y Uso</a>
            </li>

            <?php if(!isset($_SESSION['login'])){ ?>
            <li class="nav-item">

                <a class="nav-link" href="<?php echo base_url('login')?>"><i class="fas fa-sign-in-alt"></i>Login</a>
            </li>
             <li class="nav-item">

                <a class="nav-link" href="<?php echo base_url('login')?>"><i class="fas fa-sign-in-alt"></i>Registrar</a>
            </li>

            <?php }else{ ?>
            <li class='dropdown'>
                <a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> Perfil de <?= $this->session->userdata('nombre')?></a>
                <ul class="dropdown-menu" role="menu">

                    <li> <a class="dropdown-item" href="<?php echo base_url('usuario_controller/cerrar_sesion') ?>"><i class="fas fa-sign-out-alt"></i> Cerrar sessión </a></li>

                </ul>


            </li>

            <?php } ?>

        </ul>
    </div>
</nav>