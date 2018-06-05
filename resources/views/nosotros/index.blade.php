  @include('layouts.head')


    @if($nosotros->banner != 'NULL')

       <div align="center"><img src='/{{ $nosotros->banner }}' width='100%'></div>
       
    @endif
    <div class="container">

      @if($nosotros->titulo1 != 'NULL')
          <br>
          <div align="center"><h1>{{ $nosotros->titulo1 }}</h1></div>
      @endif

      @if($nosotros->parrafo1 != 'NULL')
          <div align="center"><p>{{ $nosotros->parrafo1 }}</p></div>
      @endif

      @if($nosotros->titulo2 != 'NULL')
          <br><hr><br>
          <div align="center"><h1>{{ $nosotros->titulo2 }}</h1></div>
      @endif

      @if($nosotros->parrafo2 != 'NULL')
          <div align="center"><p>{{ $nosotros->parrafo2 }}</p></div>
      @endif

      @if($nosotros->titulo3 != 'NULL')
          <br><hr><br>
          <div align="center"><h1>{{ $nosotros->titulo3 }}</h1></div>
      @endif

      @if($nosotros->parrafo3 != 'NULL')
          <div align="center"><p>{{ $nosotros->parrafo3 }}</p></div>
      @endif

      @if($nosotros->titulo4 != 'NULL')
          <br><hr><br>
          <div align="center"><h1>{{ $nosotros->titulo4 }}</h1></div>
      @endif

    @if($nosotros->imagen_intermedia != 'NULL')
      <br><br>
      <div align="center"><img src='/{{$nosotros->imagen_intermedia}}' width='60%'></div>
    @endif

    @if($nosotros->parrafo4 != 'NULL')
        <br><hr><br>
        <div align="center"><p>{{ $nosotros->parrafo4 }}</p></div>
        <br>
    @endif
  </div>

  @if($nosotros->ultima_imagen != 'NULL')
      <div align="center"><img src='/{{ $nosotros->ultima_imagen }}' width='100%'></div>
      <br><hr>
  @endif


  @include('layouts.footerUser')
