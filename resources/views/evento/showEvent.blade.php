@include('layouts.head')
<div class="container">


<br><br>
  <div class="col-sm-3 col-md-3 col-lg-3">
    @if($event->poster)
    <!--<div align="left"><img src='/{{ $event->poster }}' width='300'></div>-->
      <div align="left">
        <iframe src="{{ $event->poster }}" width="275" height="365" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe> 
        </div>

    @endif
  </div>
  <div class="col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-sm-6 col-md-6 col-lg-6">


        <h1>{{ $event->title }}</h1>
        <br>
        <p>{{ $event->descripcion }}</p>


    <br>


    @foreach ($fechas as $key => $fecha)

    <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>
    {{ $starts[$key] }}
    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
    {{ $fecha->nombre}}


    </p>
    @endforeach


  </div>



</div><br><br>

@include('layouts.footerUser')
