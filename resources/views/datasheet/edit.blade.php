

@include('layouts.app')

  <body>



    <div class="container">


      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifica Ficha Técnica</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-primary" id='link' data-id='datasheet' onclick="atras()"> Atrás</a>
            </div>
        </div>
    </div>


      <form method="POST" action="/datasheet/{{$datasheet->id}}/edit" enctype="multipart/form-data">

        {{ csrf_field() }}


        <div>

            <label for="programa">Programa</label>

            <div>

             <select id="programa" name="programa_id" value="{{ $datasheet->programa_id }}" required>

                      @foreach ($programas as $programa)

                        <option value='{{ $programa->id }}'>{{ $programa->titulo }}</option>

                       @endforeach
            </select>

            </div>

        </div>


        <hr>


        <div>

            <label for="titulo">Título</label>

            <input type="varchar" class="form-control" id="titulo" name="titulo" value="{{ $datasheet->titulo }}" required>

        </div>

        <hr>

        <div>

            <label for="director">Director</label>

            <input type="varchar" class="form-control" id="director" name="director" value="{{ $datasheet->director }}" required>

        </div>

        <hr>


        <div>

        <label for="pais"> País </label>

            <div>

                <select class="input-medium bfh-countries" data-country="US" id="pais" name="pais" value="{{ $datasheet->pais }}"required></select>

            </div>

        </div>

<!--

        <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">

              <input type="hidden" value="">

              <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">

                    <span class="bfh-selectbox-option input-medium" data-option=""></span>

                    <b class="caret"></b>
              </a>

              <div class="bfh-selectbox-options">

                    <input type="text" class="bfh-selectbox-filter">

                    <div role="listbox">

                        <ul role="option">

                        </ul>

                    </div>

              </div>

        </div>
-->

        <hr>

        <div>

            <label for="anio">Año</label>

            <input type="integer" class="form-control" id="anio" name="anio" value="{{ $datasheet->anio }}" required>

        </div>

        <hr>

        <div>

            <label for="duracion">Duración en Minutos</label>

            <input type="integer" class="form-control" id="duracion" name="duracion" value="{{ $datasheet->duracion }}" required>

        </div>


        <hr>


         <div>

            <label for="costo">Costo</label>

            <input type="integer" class="form-control" id="costo" name="costo" value="{{ $datasheet->costo }}" required>





             <label for="moneda">Moneda</label>

       <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda" value="pesos" checked>

                Pesos

            </label>

        </div>

        <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda2" value="dolares">

                Dólares

            </label>

        </div>

         <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda3" value="euros">

                Euros

            </label>

        </div>

         <div class="form-check">

            <label class="form-check-label">

                <input class="form-check-input" type="radio" name="moneda" id="moneda4" value="libras">

                Libras

            </label>
</div>
        </div>

        <hr>

         <div>

            <label for="sinopsis">Sinopsis</label>

            <input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{ $datasheet->sinopsis }}" required>

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

                <input class="form-check-input" type="radio" name="status" id="status2" value="en_proceso">

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

                    <input class="form-control" type="url" value="{{ $datasheet->trailer }}" id="trailer" name="trailer" required>

              </div>

        </div>

         <hr>



        <label for="stills">Still 1</label>

              <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="stills1" name="stills1" value="{{ $datasheet->stills1 }}">

              </div>

        </div>

        <hr>

                <label for="stills">Still 2</label>

              <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="stills2" name="stills2" value="{{ $datasheet->stills2 }}">

              </div>

        </div>

        <hr>

                <label for="stills">Still 3</label>

              <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="stills3" name="stills3" value="{{ $datasheet->stills3 }}">

              </div>

        </div>

        <hr>



        <div class="form-control-file">

            <label for="poster">Póster</label>

           <div class="form-group row">

                <div class="col-10">

                    <input class="form-control" type="url" placeholder="https://www.Box.com/ejemplo" id="poster" name="poster" value="{{ $datasheet->poster }}">

              </div>

        </div>

        <hr>



        <button type="submit" class="btn btn-primary">Guardar</button>

        @include("layouts.errors")

      </form>

    </div><!-- /.container -->




    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="/js/bootstrap-formhelpers-countries.js"></script>
    <script src="/js/bootstrap-formhelpers-countries.es_ES.js"></script>

  </body>

</html>
