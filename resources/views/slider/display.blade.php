@if (count($slider) > 3)
  <div class="carousel-big-item element" style="background-image: url({{ asset($slider[0] -> poster)}});">
    <a id="0" class="carousel-big-item-details bd-section" href="{{$slider[0] -> link}}">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="carousel-item-details-inner">
                      <h2 class="carousel-big-item-title">{{$slider[0] -> titulo}}</h1>
                      <h3 class="carousel-big-item-blurb">
                        {{$slider[0] -> subtitulo}}
                      </h3>
                  </div>
              </div>
          </div>
      </a>
  </div>

  <ol class="carousel-small-items element">
    @foreach($slider as $key => $s)
      @if($key>0 && $key<=3)
        <li class="carousel-small-item" style="background-image: url({{ asset($s -> poster)}});">
            <a id="{{$key}}" href="{{$s -> link}}">
                <div class="carousel-small-item-details">
                    <h3 class="carousel-small-item-title">
                        {{$s -> titulo}}
                    </h3>
                    <h4 class="carousel-small-item-subtitle">
                        {{$s -> subtitulo}}
                    </h4>
                </div>
            </a>
        </li>
      @endif
  @endforeach
  </ol>
@endif
@if (count($slider) > 1)
<div class="container elements">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slider  as $key => $s)
          @if($key<4)
            @if($key==1)
              <div class="item active">
            @else
              <div class="item">
            @endif
                <a id="0" href="{{$s -> link}}">
                  <img src="{{ $s -> poster }}" alt="Slide 1" style="width:100%;">
                  <div class="carousel-small-item-details">
                    <h1 class="carousel-small-item-title">
                      {{$s -> titulo}}
                    </h1>
                  </div>
                </a>
              </div>
          @endif
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
@elseif (count($slider) === 1)
  <div class="carousel-big-item element carousel-big-item-exception" style="background-image: url({{ asset($slider[0] -> poster)}});">
    <a id="0" class="carousel-big-item-details bd-section" href="{{$slider[0] -> link}}">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="carousel-item-details-inner">
                  <h2 class="carousel-big-item-title">{{$slider[0] -> titulo}}</h1>
                  <h3 class="carousel-big-item-blurb">{{$slider[0] -> subtitulo}}</h3>
              </div>
          </div>
      </div>
    </a>
  </div>
@endif
