    
  <div class="container footer_view_post_margin">
    <h2 class="text-center"><?= $titulo; ?></h2>

    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <!-- Envía la información del formulario de Edición, hacia el la Función "update" del controlador "Posts" -->
    <!-- El "form_open_multipart" se utiliza cuando en una form se va a envia infomación y tambien una imagen-->
    <?php echo form_open_multipart('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
      <div class="form-group">
        <label class="font-weight-bold">Titulo</label>
        <input type="text" class="form-control" name="titulo" placeholder="Agregar Titulo" value="<?php echo $post['titulo']; ?>">
      </div>
      <div class="form-group">
        <label class="font-weight-bold">Descripción</label>
        <textarea id="editor1" class="form-control" name="body" placeholder="Agregar Body"><?php echo $post['body']; ?></textarea>
      </div>
      <div class="form-group">
      	<label class="font-weight-bold">Categoria</label>
      	<select name="category_id" class="form-control">

      		<!-- Lee cada categoria, por cada una crea una opción de la lista desplegable-->
      		<?php foreach($categories as $category): ?>
    			<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      		<?php endforeach; ?>
      	</select>
      </div>

      <br>
      <hr>
      <br>
      <h5 class="text-center">Cargar Imagen</h5>
      <br>
      <div class="form-group">
        <div class="row">
          <div class="col-md-4">
            <label class="title-img" id="lbl-img-edit">Imagen de Antes</label>
          </div>
          <div class="col-md-8">
            <label class="title-img2" id="lbl-img-edit">Imagen Seleccionada</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div id="imagePreviewImage">
              <img width="200" height="200" src="<?php echo site_url(); ?>assets/img/posts/<?php echo $post['post_image']; ?>" alt="">
            </div>
          </div>
          <div class="col-md-8">
            <div id="imagePreview" class="prevista">
            </div>
            <input class="prevista" type="file" name="userfile" id="userfile" size="20" >
          </div>
        </div>
      </div>
      <div class="text-center" id="botonImage"><button type="submit" id="" class="btn btn-info btn-lg" aling="center">Enviar</button></div>
    </form>
  </div>



<!--                              LECTOR DE IMÁGENES                   -->
<style media="screen">

  #imagePreview{
    background-color: #767D8E;
    width: 200px;
    height: 200px;
    margin: 0 auto;
  }
  
  div img{
    max-width: 170px;
    height: 170px;
    margin-top: 15px;
    margin-left: 15px;
  }

  #imagePreviewImage{
    background-color: #767D8E;
    width: 200px;
    height: 200px;
    margin: 0 auto;
  }
  
</style>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script type="text/javascript">
  (function(){

    //Captura lo que envia el input de "selecionar imagen".
    function filePreview(input){

      //Devuelve "verdadero" o "falso" dependiendo si hubiera un archivo seleccionado(una imagen).
      if(input.files && input.files[0]){

        //creamos una clase de tipo "FileReader", que nos permitirá leer la imagen y poder mostrarla.
        var reader = new FileReader();

        //se le asigna una function con parametro "e que es un evento", éste evento nos permitirá acceder a la ruta de la  imagen, poder mostrarla en pantalla. 
        reader.onload = function(e){

          //Dentro del elemento con el id="imagePreview" (en nuestro caso el div) que esta en un archivo ".php", se creará un elemento "img" al cual se le asigna la ruta de la imagen que se seleccionó
          $('#imagePreview').html("<img src='"+e.target.result+"' />"); //en esta linea utilizamos "JQuery".
        }

        //se lee como datos de "url" la información, obtenida del input que seleciona la imagen.
        reader.readAsDataURL(input.files[0]);
      }
    }


    //Fuera de la función, escuchamos un evento.
    //Cuando cambie el archivo selecionado, vamos a ejecutar la función.
    $('#userfile').change(function(){
      //le enviamos el archivo del input de type="file", a la función "filePreview".
      filePreview(this);
    });
  })();
  
</script>

<!--                              LECTOR DE IMÁGENES                    -->