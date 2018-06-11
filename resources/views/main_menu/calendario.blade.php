<!---Creado con https://www.youtube.com/watch?v=pJ5daEXVma8&t=934s-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calendario</title>
        <script src="/js/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/master.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="/css/nav.css" rel="stylesheet">
        <link href='/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
        <link href='/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <script src='/fullcalendar/lib/moment.min.js'></script>
        <script src='/fullcalendar/lib/jquery.min.js'></script>
        <script src='/fullcalendar/fullcalendar.min.js'></script>
        <script src='/fullcalendar/locale/es.js'></script>
        <script src='/js/calendario.js'></script>
    </head>
    <body>

      <nav class="navbar ">
        <div class="container text-white" id="contentContainer">

          <a class="navbar-brand" href="{{ url('/') }}">
            <img src = "/uploads/logo_documentaqro.png" class = "img-rounded">
          </a>

            <ul class = "nav navbar-nav navLetra text-white efecto holi">
              <li ><a href = "/nosotros" class="efecto">NOSOTROS</a></li>
            </ul>

            <ul class = "nav navbar-nav navLetra text-white efecto holi">
               <li ><a href = "/calendario" class="efecto">CALENDARIO</a></li>
            </ul>

            <ul class = "nav navbar-nav navLetra text-white efecto holi">
              <li ><a href = "/programa/DoQu" class="efecto">PROGRAMAS</a></li>
            </ul>

            <ul class = "nav navbar-nav navLetra text-white efecto holi ">
              <li><a href = "/patrocinadores/show" class="efecto">PATROCINADORES</a></li>
            </ul>

            <ul class = "nav navbar-nav navLetra text-white efecto holi ">
              <li><a href = "/blog" class="efecto">BLOG</a></li>
            </ul>

            <ul class = "nav navbar-nav navLetra text-white efecto holi ">
              <li><a href = "/sedesv" class="efecto">SEDES</a></li>
            </ul>

            <ul class = "nav navbar-nav navLetra text-white efecto holi ">
             <li><a href = "/contacto" class="efecto">CONTACTO</a></li>
           </ul>
        </div>
      </nav>

      <div class='container'>
        <br><br>

      <div class=".col-md-2 col-lg-2">
        <div id="ab">Filtrar por Sede:</div>
          <select id="fetchval" name="fetchby" >
            <option value='ninguno'>Ninguno</option>
              @foreach ($sedes as $s)
                <option value='{{$s->id}}'>{{ $s->nombre }}</option>
              @endforeach
          </select>
      </div>
      <div class=".col-md-2 col-lg-2">
        <div id="ab">Filtrar por Programa:</div>
          <select id="fetchval2" name="fetchby2" >
            <option value='ninguno'>Ninguno</option>
            @foreach ($programas as $p)
                <option value='{{$p->id}}'>{{ $p->titulo }}</option>
            @endforeach
          </select>
      </div>
<div class=".col-md-8 col-lg-8"></div>

<br><br><br><br>
<div id="table-container">
  <?php

  $conn = mysqli_connect('127.0.0.1','root','','document_sysdoq');
  $query = "select * from calendario";
  $output = mysqli_query($conn,$query);
  $events = array();

   while($fetch = mysqli_fetch_array($output,MYSQLI_ASSOC)) {
     $e = array();

     $e['id'] = $fetch['id'];
     $e['title'] = $fetch['title'];
     $e['start'] = $fetch['start'];
     $e['color'] = $fetch['color'];

     array_push($events, $e);

   }
  ?>
 </div>
 <div id='calendar'></div>
<hr>
</div>

<p align='center'><a href="https://www.facebook.com/DocumentaQro/" id='facebook' ><img src= "../uploads/fb.png" height='76' width='76'></a>
<a href="https://www.instagram.com/documentaqro/" id='instagram' ><img src= "../uploads/in.png" height='76'>
<a href="https://twitter.com/documentaqro" id='twitter' ><img src= "../uploads/tw.png" height='76'>
<a href="https://www.youtube.com/documentaqro" id='youtube' ><img src= "../uploads/yt.png" height='76'></p>
    </body>
</html>
