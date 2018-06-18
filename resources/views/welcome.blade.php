@include('layouts.head')
<div style="background-color:black;">
<div class="row">
  @include('slider.display')
</div>

<div class="row">
  <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  		<div class="block">
        <h4>
          <p class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
            #HistoriasQueTransforman
          </p>
        </h4>
  			<h6>
          <p class="block col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
            Documental en Querétaro es una asociación civil que abre espacios de exhibición para
            el documental y promueve su producción, para con ello ofrecer a la comunidad la
            posibilidad de entrar en contacto con largometrajes y cortometrajes de México y
            el mundo, que muestran un poco de la realidad vista a través de los ojos del realizador.
          </p>
        </h6>
      </div>
	</section>
</div>
</div>

<div style="display:block;margin:0px 12px;text-align:center;" class="row"> <!--AGREGAR STYLE A CSS-->
  @include('evento.next')
</div>

@include('layouts.footerUser')
