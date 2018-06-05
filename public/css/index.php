<?php

echo"<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <link rel='icon' href='../../favicon.ico'>


   <!-- Bootstrap core CSS -->
   <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' integrity='sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ' crossorigin='anonymous'>
   <link rel='stylesheet' href='/css/master.css'>
   <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>



   <!-- Custom styles for this template -->

   <link href='/css/nav.css' rel='stylesheet'>
   <link href='css/bootstrap-formhelpers-countries.flags.css' rel='stylesheet'> <!-- falgs -->
   <script src='sweetalert/dist/sweetalert.min.js'></script>
   <link rel='stylesheet' type='text/css' href='sweetalert/dist/sweetalert.css'>


   <script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
   <title>DoqumentaQro</title>
 </head>

 <body>


   <nav class='navbar '>
     <div class='container text-white' id='contentContainer'>

         <a class='navbar-brand' href='{{ url('/') }}'>
            <img src = '/uploads/logo_documentaqro.png' class = 'img-rounded'>
            </a>

         <ul class = 'nav navbar-nav navLetra text-white efecto holi'>
           <li ><a href = '/nosotros' class='efecto'>NOSOTROS</a></li>
        </ul>


         <ul class = 'nav navbar-nav navLetra text-white efecto holi'>
           <li ><a href = '/calendario' class='efecto'>CALENDARIO</a></li>
        </ul>

         <ul class = 'nav navbar-nav navLetra'>
           <li class = 'dropdown'>
             <a href = '#' class = 'dropdown-toggle  efecto holi'  id='programas' data-toggle = 'dropdown' >
              PROGRAMAS
             </a>
             <ul class='dropdown-menu navLetra'>
              <li><a href='/programa/DoQu' id='DoQu' class='efecto-drop' style='margin-left: 380px;'>DoQu</a></li>
              <li><a href='/programa/docudemedianoche' id='docudemedianoche' class='efecto-drop'>#MEDIANOCHE</a></li>
              <li><a href='/programa/Docs&Tonic' id='DocsandTonic' class='efecto-drop'>DOCS&TONIC</a></li>
              <li><a href='/programa/Rhythm&Docs' id='RhythmandDocs' class='efecto-drop'>RHYTHM&DOCS</a></li>
             </ul>
          </li>
        </ul>



       <ul class = 'nav navbar-nav navLetra text-white efecto holi '>
         <li><a href = '#' class='efecto'>PATROCINADORES</a></li>
       </ul>

       <ul class = 'nav navbar-nav navLetra text-white efecto holi '>
         <li><a href = '#' class='efecto'>BLOG</a></li>
       </ul>

       <ul class = 'nav navbar-nav navLetra text-white efecto holi '>
         <li><a href = '#' class='efecto'>SEDES</a></li>
       </ul>

       <ul class = 'nav navbar-nav navLetra text-white efecto holi '>
        <li><a href = '#' class='efecto'>CONTACTO</a></li>
      </ul>

     </div>
   </nav>


<div class='container'>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br>
  <h1 align='center'>404: Not Found</h1>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br>

</div>


<p align='center'><a href='https://www.facebook.com/DocumentaQro/' id='facebook' ><img src= '../uploads/fb.png' height='76' width='76'></a>
<a href='https://www.instagram.com/documentaqro/' id='instagram' ><img src= '../uploads/in.png' height='76'>
<a href='https://twitter.com/documentaqro' id='twitter' ><img src= '../uploads/tw.png' height='76'>
<a href='https://www.youtube.com/documentaqro' id='youtube' ><img src= '../uploads/yt.png' height='76'></p>



    <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js' integrity='sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' integrity='sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb' crossorigin='anonymous'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' integrity='sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn' crossorigin='anonymous'></script>
    <script src='{{ asset('js/funcionesSweetalert.js') }}' ></script>
    <script src='{{ asset('js/validateImage.js') }}'></script>
    <script src='{{ asset('js/bootstrap-formhelpers-countries.js') }}'></script>
    <script src='{{ asset('js/bootstrap-formhelpers-countries.es_ES.js') }}'></script>
    <script src='{{ asset('js/master.js') }}'></script>


  </body>

</html>"
?>
