@if (count($eventos) > 0)
<div class="container-fluid">
  <h1>Próximos eventos</h1>
<hr>
<div class="row">
@endif

<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<ul class="list-unstyled thumbs row other element">
  @if (count($eventos) > 0)
  <li class="col-lg-2 col-md-2 col-sm-7 col-xs-7">
    <a id="a" href="/eventos/{{$eventos[0]->id}}"  title="" class="color_a">
      <img src="{{asset($eventos[0] -> poster) }}" alt="" class="img-responsive" height="130px" />
      <h2>{{$eventos[0] -> title}}</h2>
      <span class="duration">{{$eventos[0] -> title}}</span>
    </a>
  </li>
  @endif

  @if (count($eventos) > 1)
  <li id="b" class="col-lg-2 col-md-2  col-sm-7 col-xs-7">
    <a href="/eventos/{{$eventos[1]->id}}" title="" class="color_b">
      <img src="{{asset($eventos[1] -> poster) }}" alt="" class="img-responsive" height="130px" />
      <h2>{{$eventos[1] -> title}}</h2>
      <span class="duration">{{$eventos[1] -> title}}</span>
    </a>
  </li>
  @endif

  @if (count($eventos) > 2)
  <li id="c" class="col-lg-2 col-md-2  col-sm-7 col-xs-7">
    <a href="/eventos/{{$eventos[1]->id}}" title="" class="color_c">
      <img src="{{asset($eventos[2] -> poster) }}" alt="" class="img-responsive" height="130px" />
      <h2>{{$eventos[2] -> title}}</h2>
      <span class="duration">{{$eventos[2] -> title}}</span>
    </a>
  </li>
  @endif

  </ul>
</div>
</section>


<!--para movil-->

@if (count($eventos) > 0)
<div class="container elements">
  <div id="carousel2" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel2" data-slide-to="1"></li>
      <li data-target="#carousel2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      @if (count($eventos) > 0)
    <div class="item active">
      <a id="a" href="/eventos/{{$eventos[0]->id}}">
        <h2>{{$eventos[0] -> title}}</h2>
       <img src="{{asset($eventos[0] -> poster) }}" alt="Slide 1" style="width:100%;">


       </a>
      </div>
      @endif

      @if (count($eventos) > 1)
      <div class="item">
      <a id="b" href="/eventos/{{$eventos[1]->id}}">
       <h2>{{$eventos[1] -> title}}</h2>
       <img src="{{asset($eventos[1] -> poster) }}" alt="Slide 1" style="width:100%;">
       </a>
      </div>
      @endif

      @if (count($eventos) > 2)
      <div class="item">
      <a id="c" href="/eventos/{{$eventos[2]->id}}">
      <h2>{{$eventos[2] -> title}}</h2>
       <img src="{{asset($eventos[2] -> poster) }}" alt="Slide 1" style="width:100%;">
       </a>
      </div>
      @endif

     </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control" href="#carousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
@endif
