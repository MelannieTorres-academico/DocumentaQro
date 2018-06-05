@include('layouts.head')
  <body>

    <br><br><br>
    <br>

    <div class="container">
      <div class="row">
        @if( $datasheet->poster )

        <div class="col-sm-3 col-md-3 col-lg-3">
          <div align="left">
            <!--<img src='/{{ $datasheet->poster }}' width ='300'>-->
            <iframe src="{{ $datasheet->poster }}" width="500" height="300" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe> 
          </div>
        </div>
        @endif

        <div class="col-sm-2 col-md-2 col-lg-2"></div>
          <div class="col-sm-5 col-md-5 col-lg-5">

            <h1>#{{ $datasheet->programa }}</h1>
            <h2>{{ $datasheet->titulo }}</h2>
          <h4> {{ $datasheet->director }} | {{ $datasheet->pais }} | {{ $datasheet->anio }} | {{ $datasheet->duracion }} min </h4>
          <br>
          <p>{{ $datasheet->sinopsis }}</p>
        </div>
      </div>
      <br><br><br>
      @if($datasheet->trailer != 'NULL')
    <div align='center'><iframe width="275" height="365" src='{{$datasheet->trailer}}' frameborder="0" allowfullscreen></iframe></div>
      @else
      <p class='alert alert-danger'>Video no encontrado</p>
      @endif
  </div>



    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="js/bootstrap-formhelpers-countries.js"></script>
    <script src="js/bootstrap-formhelpers-countries.es_ES.js"></script>

  </body>

</html>
