<!-- Footer- Pie de página-->
<footer class="footer text-center">
<div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-instagram"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; Your Website 2019</p>
    </div>
</footer>

<script src="<?php echo base_url('assets/js/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>


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