<h2 class="text-center"><?= $titulo; ?></h2>

<!-- Esta linea muestra en pantalla los campos que son requeridos y que no fueron completados. El "div" es para mostrar el mensaje dentro de una celda de mensajes con fondo rojo -->
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

  <div class="container form_post_margin">
    <?php echo form_open_multipart('posts/create'); ?>
      <div class="form-group">
        <label class="font-weight-bold">Titulo</label>
        <input type="text" class="form-control" name="titulo" placeholder="Agregar Titulo">
      </div>
      <div class="form-group">
        <label class="font-weight-bold">Descripción</label>
        <textarea id="editor1" class="form-control" rows="10" cols="80" name="body" placeholder="Agregar Body"></textarea>
      </div>

      <!-- Es la Lista desplegable de las categorias-->
      <div class="form-group">
    	  	<label class="font-weight-bold">Categoria</label>
    	  	<select name="category_id" class="form-control" id="">

    	  		<!-- Lee cada categoria, por cada una crea una opción de la lista desplegable-->
    	  		<?php foreach($categories as $category): ?>
    				<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
    	  		<?php endforeach; ?>
    	  	</select>
      </div>
      <br>
      <div class="form-group" align="center">
    	  	<label class="title-carga">Cargar Imagen</label>
          <br>
          <div id="imagePreview" class="prevista">
      
          </div>
    	  	<input type="file" name="userfile" id="userfile" size="20" class="prevista">
      </div>
      <div class="text-center" id="botonImage"><button type="submit" class="btn btn-success btn-lg" aling="center">Enviar</button></div>
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