@if (count($eventos) > 0)
<div class="container-fluid">
  <h1>Próximos eventos</h1>
<hr>
@endif

<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<ul class="list-unstyled thumbs row other ">
    @foreach($eventos as $key => $evento)

    @if($key>=0 && $key<3)
  <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <a id="a" href="/eventos/{{$evento->id}}"  title="" class="color_{{$key}}">
      <!--<img src="/uploads/0d797e35a15f5409595132f6986ab829.jpg" class='img-fluid w-100'/>-->
      <iframe src="{{ $evento->poster }}"  class='img-fluid w-100' frameborder="0"></iframe>

      <!--<img src="{{asset($evento-> poster) }}" alt="" class="img-fluid w-100"/>-->
      <h2>{{$evento -> title}}</h2>
      <span class="duration">{{$evento -> title}}</span>
    </a>
  </li>
  @endif

  @endforeach


  </ul>
</section>
