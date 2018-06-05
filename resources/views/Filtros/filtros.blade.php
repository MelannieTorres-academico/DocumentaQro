



    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

   


<body>

    <a class="navbar-brand" href="{{ url('/sysdoq') }}">
                        Panel de Control
                    </a>



    <header>
        <div id="search-input"></div>
    </header>

    <main>
      <div id="left-column">
        <div id="status" class="facet"></div>
        <div id="costo" class="costo"></div>
        <div id="duracion" class="facet"></div>
        <div id="subtitulos" class="facet"></div>
        <div id="programa" class="facet"></div>
      </div>


      <div id="right-column">
        <div id="stats"></div>
        <div id="hits"></div>
        <div id="pagination"></div>
      </div>
    </main>


<script type="text/html" id="hit-template">
  <div class="hit">

  <div class="hit-poster">
      
    </div>

    <div class="hit-content">
      <h1 class="hit-titulo">@{{{titulo}}}</h1>
      <h2 class="hit-status" class="hit-duracion">Estatus: @{{status}}, Duración: @{{duracion}} minutos.</h2>
      <h3 class="hit-costo" class="hit-moneda">$@{{costo}} @{{moneda}}</h3>
      <h4 class="hit-director" class="hit-pais" class="hit-anio">Director: @{{director}}, País: @{{pais}} y Año: @{{anio}}</h4>
      <h4 class="hit-subtitulos">Subtitulos: @{{subtitulos}}</h4>
      <h4 class="hit-programa">@{{{programa}}}</h4>
    </div>
  </div>
</script>


<script type="text/html" id="no-results-template">
  <div id="no-results-message">
    <p>No se encontraron resultados... <em>"@{{query}}"</em>.</p>
    <a href="" class="clear-all">Reiniciar Búsqueda</a>
  </div>
</script>


    
    <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="js/search.js"></script>

</body>
</html>

