<!-- Footer- Pie de página-->
<footer class="container-fluid bg-dark d-none d-md-block mt-5">
    <div class="row">
        <div class="col-6 col-md-4 d-flex justify-content-center">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="<?php echo base_url('terminoyuso')?>">Término y Uso</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="text-white"> Solutions IT <img  src="<?php echo base_url('assets/img/copi.png'); ?>" height="25px">Copyright 2018
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-6 col-md-4 d-flex justify-content-center">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Seguinos:</a>
                    <a href="" title="seguinos en facebook">
                        <i class="fab fa-facebook fa-2x" style="color: white;"></i>
                    </a>
                    <a href="" title="seguinos en twitter">
                        <i class="fab fa-twitter-square fa-2x" style="color: white;"></i>
                    </a>
                    <a href="" title="seguinos en instagram">
                        <i class="fab fa-instagram fa-2x" style="color: white;"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <ul class="nav flex-column  d-none d-sm-none d-md-block">
                <li class="nav-item">

                    <a class="nav-link text-white" href="<?php echo base_url('registrarse')?>">Registrarse</a>

                    <a class="nav-link active text-white" href="<?php echo base_url('quienessomos')?>">Quiénes Somos</a>

                    <a class="nav-link active text-white" href="<?php echo base_url('contacto')?>">Información de Contacto</a>




                </li>
            </ul>
        </div>

    </div>
</footer>

<script src="<?php echo base_url('assets/js/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>


<script>
    function limpiar_carrito() {
        var result = confirm('Desea vaciar el carrito?');
        if (result) {
            window.location = "<?php echo base_url(); ?>carrito_controller/borrar/all";
        } else {
            return false; // cancela al acción
        }
    }
</script>


<!--                                Snatchbot                               -->


<link rel="stylesheet" href="<?php echo base_url('assets/css/chatbot/webchat.css');?>" type="text/css"> 

<script src="<?php echo base_url('assets/js/webchat.min.js');?>"></script>

<script>
     Init('?botID=45471&appID=webchat', 600, 600, '<?php echo base_url("assets/img/rys-black.png");?>', 'rounded', '#00AFF0', 90, 90, 62.99999999999999, '', '1', '#FFFFFF', '#FFFFFF', 0); /* for authentication of its users, you can define your userID (add &userID={login}) */ 
</script>

<div>
    <span class="snatch-button" data-text="">
        <a class="lwc-chat-button rounded" style="background-image: url('<?php echo base_url("assets/img/rys-black.png");?>'); background-position: center; background-size: cover; background-color:#00AFF0; width:90px; height:90px;">
        </a>
    </span>
</div>


<div id="sntchWebChat" style="visibility: hidden;">
    <div id="sntch_header">
        <div id="sntch_close">X</div>
    </div>
    <div id="content"></div>
    
</div>


<!--                                Snatchbot                               -->

</body>

</html>