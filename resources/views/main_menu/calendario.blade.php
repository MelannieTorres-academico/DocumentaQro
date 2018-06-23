<!---Creado con https://www.youtube.com/watch?v=pJ5daEXVma8&t=934s-->
<!DOCTYPE html>
<html lang="en">
    <head>
     <link rel="icon" href="../../favicon.ico">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Calendario</title>
      <script type="text/javascript" src="/js/jquery.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
      <link rel="stylesheet" href="/css/master.css">
      <link href="/css/nav.css" rel="stylesheet">
      <link href='/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
      <link href='/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
      <script src='/fullcalendar/lib/moment.min.js'></script>
      <script src='/fullcalendar/lib/jquery.min.js'></script>
      <script src='/fullcalendar/fullcalendar.min.js'></script>
      <script src='/fullcalendar/locale/es.js'></script>
      <script src='/js/calendario.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
      @include('layouts.nav')

    <div class='container'>
      <br><br>
      <div class="row">
        <div class="col-md-2 col-lg-2">
          <div id="ab">Filtrar por Sede:</div>
            <select id="sede" onChange="refetch()">
              <option value=''>Ninguno</option>
                @foreach ($sedes as $s)
                  <option value='{{$s->id}}'>{{ $s->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2 col-lg-2">
          <div id="ab">Filtrar por Programa:</div>
            <select id="programa" onChange="refetch()" >
              <option value=''>Ninguno</option>
              @foreach ($programas as $p)
                  <option value='{{$p->id}}'>{{ $p->titulo }}</option>
              @endforeach
            </select>
        </div>
        <div class="col-md-8 col-lg-8"></div>
      </div>
      <br><br><br>
     <div id='calendar'></div>
    </div>
    @include('layouts.footerRedesSociales')
    </body>
</html>
