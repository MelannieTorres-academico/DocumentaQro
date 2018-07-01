@include('layouts.head')

<div class="container">



    <br><br>
    <div class="container">
    <div class="row">


      @foreach ($datasheets  as $key => $datasheet)


      <div class="col-sm-4 col-md-4 col-lg-4">
        <div align="left">
        <!--<img src='/{{ $datasheet->poster }}' width='300'>-->
        <iframe src="{{ $datasheet->poster }}" class="img-fluid w-100" width="275" height="365" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe>
        </div>
      </div>
      <!--<div class="col-sm-2 col-md-2 col-lg-2"></div>-->
        <div class="col-sm-8 col-md-8 col-lg-8">
          @if ($key==0)
            <h1>#{{$datasheet->programa}}</h1>
          @endif
            <h1>{{ $datasheet->titulo }}</h1>
            <h4> @if($datasheet->director){{ $datasheet->director }} |@endif
              @if($datasheet->pais){{ $datasheet->pais }} |@endif
              @if($datasheet->anio){{ $datasheet->anio }} | @endif
              @if($datasheet->duracion){{ $datasheet->duracion }} @endif </h4>
            <br>
            <p>{{ $datasheet->sinopsis }}</p>

            @if ($key==0)
              @foreach ($fechas  as $key => $fecha)
              <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>
              {{ $starts[$key] }}</p>
              <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
              {{ $fecha->nombre}}</p>
              <br>

              @endforeach
            @endif

      </div>
<br>
      @if (count($datasheets)==1)
      <iframe style="margin-right:auto;margin-left:auto;" width="560" height="315" src='{{$video}}' frameborder="0" allowfullscreen></iframe>
      @endif

@endforeach

    </div><br><br>

</div>

@include('layouts.footerUser')
