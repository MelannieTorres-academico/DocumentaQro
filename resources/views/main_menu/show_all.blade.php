@include('layouts.head')



<div class="container">
  <br><br>

  @foreach ($programas as $key => $programa)
  @if($programa->titulo!='ninguno')
  <div class="row">

  <div class="col-xs-4 col-sm-4 col-md-4">
    <img src='{{ asset($programa->poster) }}' width='350'>
  </div>
  <div class="col-xs-8 col-sm-8 col-md-8">
    <h1>#{{$programa->titulo}}</h1>
    <br>
    <p>
      {{$programa->descripcion}}
    </p>
  </div>
</div>
<hr>
  @endif
@endforeach

</div>
@include('layouts.footerUser')
