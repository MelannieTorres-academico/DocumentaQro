@include('layouts.app')




<body>
  <div class="container">
@include("layouts.errors")
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nuevo Slider</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='slider' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>

  <form method="POST" action="/slider/create" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div>

<label for="titulo">Titulo de post de slider</label>

<input type="varchar" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>

  </div>

<hr>

  <div>

<label for="subtitulo">Subtitulo</label>

<input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtitulo" required>

  </div>

<hr>
  <div>
<label for="link" class="col-2 col-form-label">Link</label>

  <div class="form-group row">
    <div class="col-10">

  <input class="form-control" type="url" placeholder="http://www.linkalpost.com" id="Link" name="link" required>

  </div>
  </div>
  </div>
  <hr>

  <div class="form-control-file">

<input type="file" class="form-control-file" id="poster" name="poster" aria-describedby="fileHelp" required accept="image/*" >

<small id="fileHelp" class="form-text text-muted">Imagen del slider</small>
<div id="preview"></div>

</div>



<hr>
<div class="col-xs-10 col-sm-10 col-md-10 text-center">
<button type="submit" class="btn btn-primary">Crear</button>

</div>



</form>

  </div><!-- /.container -->




<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="js/bootstrap-formhelpers-countries.js"></script>
<script src="js/bootstrap-formhelpers-countries.es_ES.js"></script>

</body>

</html>
