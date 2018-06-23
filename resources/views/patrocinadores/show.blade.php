@include('layouts.head')
<div style="margin-bottom:20px;">
    <div class="page-header" style="margin:30px 50px">
      <h1><b>Nuestros orgullosos patrocinadores</b> </h1>
    </div>

<div style="margin:0px 90px;">
        <h2 style="margin:30px 0px;">PRESENTADO POR:</h2>
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

            <h2 style="margin:30px 0px;">CON EL APOYO DE:</h2>
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

                  <h2 style="margin:30px 0px;">EN COLABORACI&Oacute;N CON:</h2>
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
</div>

@include('layouts.footerUser')
