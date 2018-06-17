@include('layouts.head')

<div class="page-header">
  <h1><b>Nuestros orgullosos patrocinadores</b> </h1>
</div>

<div class="container">
<h2>PRESENTADO POR:</h2>
  <div class="row">
    @foreach($patrocinadores as $patrocinador)
      @if ($patrocinador -> categoria === 1)
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <div class="">
            <a href="{{$patrocinador -> link}}"><img style="width:200px; max-width:200px;" src="{{ asset($patrocinador -> poster) }}" ></a>
          </div>
        </div>
        @endif
      @endforeach
    </div>

<hr>
<div class="container">
<h2>CON EL APOYO DE:</h2>

      <div class="row">
    @foreach($patrocinadores as $patrocinador)

      @if ($patrocinador -> categoria === 2)
    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
            <div class="">
              <a href="{{$patrocinador -> link}}">  <img style="width:150px; max-width:150px;" src="{{ asset($patrocinador -> poster) }}" > </a>

            </div>
        </div>
        @endif
      @endforeach
</div>

  <hr>
      <h1>EN COLABORACI&Oacute;N CON:</h1>
        <div class="row">
      @foreach($patrocinadores as $patrocinador)

        @if ($patrocinador -> categoria === 3)
      <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2">
              <div class="">
                  <a href="{{$patrocinador -> link}}"><img style="width:100px; max-width:100px;" src="{{ asset($patrocinador -> poster) }}" ></a>

              </div>
          </div>
          @endif
        @endforeach
      </div>
</div>
</div>

@include('layouts.footerUser')
