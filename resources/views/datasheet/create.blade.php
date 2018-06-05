@include('layouts.app')

  <body>

    <div class="container">

        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crear Nueva Ficha Técnica</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='datasheet' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>


      <form method="POST" action="{{ route('datasheet.store') }}" enctype="multipart/form-data">

        {{ csrf_field() }}


        <div>

            <label for="programa">Programa</label>

            <div>

             <select id="programa" name="programa_id" required>


                      @foreach ($programas as $programa)

                        <option value='{{ $programa->id }}'>{{ $programa->titulo }}</option>

                       @endforeach
            </select>

            </div>

        </div>


        <hr>


        <div>

            <label for="titulo">Título</label>

            <input type="varchar" class="form-control" id="titulo" name="titulo" placeholder="Tombstone" required>

        </div>

        <hr>

        <div>

            <label for="director">Director</label>

            <input type="varchar" class="form-control" id="director" name="director" placeholder="George P. Cosmatos" required>

        </div>

        <hr>


        <div>

        <label for="pais"> País </label>

            <div>

                <select class="input-medium bfh-countries" data-country="US" id="pais" name="pais" required></select>

            </div>

        </div>



        <hr>

        <div>

            <label for="anio">Año</label>

            <input type="integer" class="form-control" id="anio" name="anio" placeholder="1993" required>

        </div>

        <hr>

        <div>

            <label for="duracion">Duración en Minutos</label>

            <input type="integer" class="form-control" id="duracion" name="duracion" placeholder="160" required>

        </div>


        <hr>


         <div>

            <label for="costo">Costo</label>

            <input type="integer" class="form-control" id="costo" name="costo" placeholder="10" required>

        </div>


        <hr>

        <div>

        <label class="form-check-label" for="moneda">Moneda

        <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda" value="pesos" checked>

                Pesos

            </label>

        </div>

          <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda3" value="euros" checked>

                Euros

            </label>

        </div>

          <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda2" value="dolares" checked>

                Dólares

            </label>

        </div>

          <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda4" value="libras" checked>

                Libras

            </label>

        </div>

            </label>
        </div>

        <hr>

         <div>

            <label for="sinopsis">Sinopsis</label>

            <textarea class="form-control" rows="4" cols="50" id="sinopsis" name="sinopsis" placeholder="El 26 de octubre de 1881, cuatro hombres hicieron leyenda:  Wyatt Earp, sus dos hermanos, Virgil y Morgan y Doc Holliday..." required></textarea>

        </div>




        <hr>


        <label for="status">Status</label>

       <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="status" id="status1" value="disponible" checked>

                Disponible

            </label>

        </div>

          <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="status" id="status2" value="en_proceso" checked>

                En Proceso

            </label>

        </div>

        <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="status" id="status3" value="no_disponible">

                No Disponoble

            </label>

        </div>

        <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="status" id="status4" value="cancelado">

                Cancelado

            </label>

        </div>



        <hr>



        <label for="subtitulos">Subtítulos</label>

       <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="subtitulos" id="subtitulos" value="si" checked>

                Sí

            </label>

        </div>

        <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="subtitulos" id="subtitulos2" value="no">

                No

            </label>

        </div>


        <hr>


        <label for="trailer" class="col-2 col-form-label">Trailer ( Link )</label>

        <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.youtube.com/ejemplo" id="trailer" name="trailer" required>

              </div>

        </div>

         <hr>


            <label for="stills">Still 1</label>

              <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="stills1" name="stills1" >

              </div>
           <small id="fileHelp" class="form-text text-muted">Stills</small>

           <div id="preview"></div>

        </div>

         <label for="stills">Still 2</label>

              <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="stills2" name="stills2" >

              </div>
           <small id="fileHelp" class="form-text text-muted">Stills</small>

           <div id="preview"></div>

        </div>

         <label for="stills">Still 3</label>

              <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="stills3" name="stills3" >

              </div>
           <small id="fileHelp" class="form-text text-muted">Stills</small>

           <div id="preview"></div>

        </div>

        <hr>


        <div class="form-control-file">

            <label for="poster">Póster</label>

           <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="poster" name="poster" >

              </div>
           <small id="fileHelp" class="form-text text-muted">Poster</small>

           <div id="preview"></div>

        </div>

        <hr>



        <button type="submit" class="btn btn-primary">Crear</button>

        @include("layouts.errors")

      </form>

    </div><!-- /.container -->

@include('layouts.footer')


    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="js/bootstrap-formhelpers-countries.js"></script>
    <script src="js/bootstrap-formhelpers-countries.es_ES.js"></script>

  </body>

</html>
