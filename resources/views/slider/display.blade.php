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

  <li class="carousel-small-item"
      style="background-image: url({{ asset($slider[1] -> poster)}});">
          <a  id="1" href="{{$slider[1] -> link}}">
              <div class="carousel-small-item-details">
                  <h3 class="carousel-small-item-title">
                      {{$slider[1] -> titulo}}

                  </h3>
                  <h4 class="carousel-small-item-subtitle">

                      {{$slider[1] -> subtitulo}}

                  </h4>
              </div>
          </a>
  </li>



  <li class="carousel-small-item "
      style="background-image: url({{ asset($slider[2] -> poster)}});">
          <a  id="2" href="{{$slider[2] -> link}}">
              <div class="carousel-small-item-details">
                  <h3 class="carousel-small-item-title">
                      {{$slider[2] -> titulo}}

                  </h3>
                  <h4 class="carousel-small-item-subtitle">

                      {{$slider[2] -> subtitulo}}

                  </h4>
              </div>
          </a>
  </li>



  <li class="carousel-small-item "
      style="background-image: url({{ asset($slider[3] -> poster)}});">
          <a id="3" href="{{$slider[3] -> link}}">
              <div class="carousel-small-item-details">
                  <h3 class="carousel-small-item-title">
                      {{$slider[3] -> titulo}}

                  </h3>
                  <h4 class="carousel-small-item-subtitle">

                      {{$slider[3] -> subtitulo}}

                  </h4>
              </div>
          </a>
  </li>

</ol>
</div>
@elseif (count($slider) > 0)
<div class="carousel-big-item element carousel-big-item-exception" style="background-image: url({{ asset($slider[0] -> poster)}});">


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
@else

@endif



<div class="container elements">
  <div id="carousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
      <li data-target="#carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    @if (count($slider) > 0)
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
    @endif



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
