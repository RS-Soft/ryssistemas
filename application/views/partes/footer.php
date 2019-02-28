<!-- Footer- Pie de página-->
<footer class="footer text-center">
<div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/RySSistema/" target="_blank">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/ryssistemas/" target="_blank">
            <i class="icon-social-instagram"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Todos los Derechos Reservados &copy; RySSistemas 2019</p>
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
  <link href="https://es.snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css">
  <script 
      src="https://es.snatchbot.me/sdk/webchat.min.js">
  </script>
  <script>
     Init('?botID=45471&appID=webchat', 600, 600, 'https://dvgpba5hywmpo.cloudfront.net/media/image/ppU2VSokRvJURT3kUpW9xEjnD', 'rounded', '#00AFF0',
     90, 90, 62.99999999999999, '', '1', '#FFFFFF', '#FFFFFF', 0);
  </script>
<!--                                Snatchbot                               -->

</body>

</html>