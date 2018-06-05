@include('layouts.head')

<div class="container">



    <br><br>
    <div class="container">
    <div class="row">


      @foreach ($datasheets  as $key => $datasheet)


      <div class="col-sm-3 col-md-3 col-lg-3">
        <div align="left">
        <!--<img src='/{{ $datasheet->poster }}' width='300'>-->
        <iframe src="{{ $datasheet->poster }}" width="275" height="365" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe> 
        </div>
      </div>
      <div class="col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-sm-6 col-md-6 col-lg-6">
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
<p style="color:white">{{$video}}</p><br>
      @if (count($datasheets)==1)
      <div style="text-align:center">
        <iframe width="560" height="315" src='{{$video}}' frameborder="0" allowfullscreen></iframe>
      </div>
      @endif

@endforeach

    </div><br><br>

</div>

@include('layouts.footerUser')
