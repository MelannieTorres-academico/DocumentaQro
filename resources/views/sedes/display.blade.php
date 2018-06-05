@include('layouts.head')

  <body>


<div class="row">


     <div class="jumbotron container col-md-10">
       <h1>Sedes</h1>
       <p>En estas ubicaciones se realizaran los eventos.</p>
     </div>
     </div>

     <div style="width: 100%; height: 300px;" >
      {!! Mapper::render() !!}

     </div>

       <br><br><br>
<div class="container">
  <div class="row">

    @foreach ($sedes as $sede)
    <div class="col-sm-12 col-md-5 col-lg-3 center">


        <div class="caption"><a href="{{$sede -> link}}">
          <img id="a" class="sede" style="width:255px; max-width:255px;" src="{{asset($sede -> poster) }}"  ></a>
          <div class="form-group">

              <h3>{{ $sede -> nombre}}</h3>
          </div>
          <p>{{ $sede -> info}}</p>
          <p>{{ $sede -> direccion}}</p>


      </div>
    </div>

    <hr>
    @endforeach
  </div>

@include('layouts.footerUser')

 </div>
 </body>
