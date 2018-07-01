@include('layouts.head')
<div class="container">
<br><br>
<div class="row">

  <div class="col-sm-4 col-md-4 col-lg-4">
    @if($event->poster)
    <!--<div align="left"><img src='/{{ $event->poster }}' width='300'></div>-->
      <div align="left">
        <iframe src="{{ $event->poster }}" class="img-fluid w-100" width="275" height="365" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe>
        </div>

    @endif
    </div>
    <div class="col-sm-8 col-md-8 col-lg-8">


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
</div>



</div><br><br>

@include('layouts.footerUser')
