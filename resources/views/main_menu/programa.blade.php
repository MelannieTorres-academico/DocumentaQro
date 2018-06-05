@include('layouts.head')



<div class="container">
  <br><br>
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



  <br><br>
  <br><br><br>
  <br><br><br>
  <br><br><br>
  <br><br><br>
  <br><br><br>
  <br><br><br>
  <br><br><br>


</div>
@include('layouts.footerUser')
